<template>
  <Head :title="title" />

  <jet-banner />

  <div class="min-h-screen bg-white">
    <!-- Mobile menu -->
    <TransitionRoot as="template" :show="open">
      <Dialog
        as="div"
        class="fixed inset-0 flex z-40 lg:hidden"
        @close="open = false"
      >
        <TransitionChild
          as="template"
          enter="transition-opacity ease-linear duration-300"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="transition-opacity ease-linear duration-300"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay class="fixed inset-0 bg-black bg-opacity-25" />
        </TransitionChild>

        <TransitionChild
          as="template"
          enter="transition ease-in-out duration-300 transform"
          enter-from="-translate-x-full"
          enter-to="translate-x-0"
          leave="transition ease-in-out duration-300 transform"
          leave-from="translate-x-0"
          leave-to="-translate-x-full"
        >
          <div
            class="
              relative
              max-w-xs
              w-full
              bg-white
              shadow-xl
              pb-12
              flex flex-col
              overflow-y-auto
            "
          >
            <div class="px-4 pt-5 pb-2 flex">
              <button
                type="button"
                class="
                  -m-2
                  p-2
                  rounded-md
                  inline-flex
                  items-center
                  justify-center
                  text-gray-400
                "
                @click="open = false"
              >
                <span class="sr-only">Close menu</span>
                <XIcon class="h-6 w-6" aria-hidden="true" />
              </button>
            </div>

            <!-- Links -->
            <TabGroup as="div" class="mt-2">
              <div class="border-b border-gray-200">
                <TabList class="-mb-px flex px-4 space-x-8">
                  <Tab
                    as="template"
                    v-for="category in navigation.categories"
                    :key="category.name"
                    v-slot="{ selected }"
                  >
                    <button
                      :class="[
                        selected
                          ? 'text-green-600 border-green-600'
                          : 'text-gray-900 border-transparent',
                        'flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium',
                      ]"
                    >
                      {{ category.name }}
                    </button>
                  </Tab>
                </TabList>
              </div>
              <TabPanels as="template">
                <TabPanel
                  v-for="category in navigation.categories"
                  :key="category.name"
                  class="px-4 py-6 space-y-12"
                >
                  <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                    <div
                      v-for="item in category.featured"
                      :key="item.name"
                      class="group relative"
                    >
                      <div
                        class="
                          aspect-w-1 aspect-h-1
                          rounded-md
                          bg-gray-100
                          overflow-hidden
                          group-hover:opacity-75
                        "
                      >
                        <img
                          :src="item.imageSrc"
                          :alt="item.imageAlt"
                          class="object-center object-cover"
                        />
                      </div>
                      <a
                        :href="item.href"
                        class="mt-6 block text-sm font-medium text-gray-900"
                      >
                        <span
                          class="absolute z-10 inset-0"
                          aria-hidden="true"
                        />
                        {{ item.name }}
                      </a>
                      <p aria-hidden="true" class="mt-1 text-sm text-gray-500">
                        立即選購
                      </p>
                    </div>
                  </div>
                </TabPanel>
              </TabPanels>
            </TabGroup>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
              <div
                v-for="page in navigation.pages"
                :key="page.name"
                class="flow-root"
              >
                <a
                  :href="page.href"
                  class="-m-2 p-2 block font-medium text-gray-900"
                  >{{ page.name }}</a
                >
              </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
              <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900"
                  >免費註冊</a
                >
              </div>
              <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900"
                  >登入</a
                >
              </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
              <!-- Currency selector -->
              <form>
                <div class="inline-block">
                  <label for="mobile-currency" class="sr-only">Currency</label>
                  <div
                    class="
                      -ml-2
                      group
                      relative
                      border-transparent
                      rounded-md
                      focus-within:ring-2 focus-within:ring-white
                    "
                  >
                    <select
                      id="mobile-currency"
                      name="currency"
                      class="
                        bg-none
                        border-transparent
                        rounded-md
                        py-0.5
                        pl-2
                        pr-5
                        flex
                        items-center
                        text-sm
                        font-medium
                        text-gray-700
                        group-hover:text-gray-800
                        focus:outline-none
                        focus:ring-0
                        focus:border-transparent
                      "
                    >
                      <option v-for="currency in currencies" :key="currency">
                        {{ currency }}
                      </option>
                    </select>
                    <div
                      class="
                        absolute
                        right-0
                        inset-y-0
                        flex
                        items-center
                        pointer-events-none
                      "
                    >
                      <svg
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 20"
                        class="w-5 h-5 text-gray-500"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M6 8l4 4 4-4"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </TransitionChild>
      </Dialog>
    </TransitionRoot>

    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div
            class="
              max-w-7xl
              mx-auto
              h-10
              px-4
              flex
              items-center
              justify-between
              sm:px-6
              lg:px-8
            "
          >
            <!-- Currency selector -->
            <form>
              <div>
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div
                  class="
                    -ml-2
                    group
                    relative
                    bg-gray-900
                    border-transparent
                    rounded-md
                    focus-within:ring-2 focus-within:ring-white
                  "
                >
                  <select
                    id="desktop-currency"
                    name="currency"
                    class="
                      bg-none bg-gray-900
                      border-transparent
                      rounded-md
                      py-0.5
                      pl-2
                      pr-5
                      flex
                      items-center
                      text-sm
                      font-medium
                      text-white
                      group-hover:text-gray-100
                      focus:outline-none
                      focus:ring-0
                      focus:border-transparent
                    "
                  >
                    <option v-for="currency in currencies" :key="currency">
                      {{ currency }}
                    </option>
                  </select>
                  <div
                    class="
                      absolute
                      right-0
                      inset-y-0
                      flex
                      items-center
                      pointer-events-none
                    "
                  >
                    <svg
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 20 20"
                      class="w-5 h-5 text-gray-300"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M6 8l4 4 4-4"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </form>

            <div class="flex items-center space-x-6">
              <Link
                :href="route('login')"
                class="text-sm font-medium text-white hover:text-gray-100"
              >
                登入
              </Link>

              <Link
                :href="route('register')"
                class="text-sm font-medium text-white hover:text-gray-100"
              >
                免費註冊
              </Link>
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-16 flex items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex-1 lg:flex lg:items-center">
                <a href="/">
                  <span class="sr-only">Tea Fun Fast</span>
                  <img class="h-8 w-auto" src="/images/logo.png" alt="" />
                </a>
              </div>

              <div class="hidden h-full lg:flex">
                <!-- Flyout menus -->
                <PopoverGroup class="px-4 bottom-0 inset-x-0">
                  <div class="h-full flex justify-center space-x-8">
                    <Popover
                      v-for="category in navigation.categories"
                      :key="category.name"
                      class="flex"
                      v-slot="{ open }"
                    >
                      <div class="relative flex">
                        <PopoverButton
                          :class="[
                            open
                              ? 'text-green-600'
                              : 'text-gray-700 hover:text-gray-800',
                            'relative flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium',
                          ]"
                        >
                          {{ category.name }}
                          <span
                            :class="[
                              open ? 'bg-green-600' : '',
                              'absolute z-20 -bottom-px inset-x-0 h-0.5 transition ease-out duration-200',
                            ]"
                            aria-hidden="true"
                          />
                        </PopoverButton>
                      </div>

                      <transition
                        enter-active-class="transition ease-out duration-200"
                        enter-from-class="opacity-0"
                        enter-to-class="opacity-100"
                        leave-active-class="transition ease-in duration-150"
                        leave-from-class="opacity-100"
                        leave-to-class="opacity-0"
                      >
                        <PopoverPanel
                          class="
                            absolute
                            z-10
                            top-full
                            inset-x-0
                            bg-white
                            text-sm text-gray-500
                          "
                        >
                          <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                          <div
                            class="absolute inset-0 top-1/2 bg-white shadow"
                            aria-hidden="true"
                          />
                          <!-- Fake border when menu is open -->
                          <div
                            class="
                              absolute
                              inset-0
                              top-0
                              h-px
                              max-w-7xl
                              mx-auto
                              px-8
                            "
                            aria-hidden="true"
                          >
                            <div
                              :class="[
                                open ? 'bg-gray-200' : 'bg-transparent',
                                'w-full h-px transition-colors ease-out duration-200',
                              ]"
                            />
                          </div>

                          <div class="relative">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                              <div
                                class="grid grid-cols-4 gap-y-10 gap-x-8 py-16"
                              >
                                <div
                                  v-for="item in category.featured"
                                  :key="item.name"
                                  class="group relative"
                                >
                                  <div
                                    class="
                                      aspect-w-1 aspect-h-1
                                      rounded-md
                                      bg-gray-100
                                      overflow-hidden
                                      group-hover:opacity-75
                                    "
                                  >
                                    <img
                                      :src="item.imageSrc"
                                      :alt="item.imageAlt"
                                      class="object-center object-cover"
                                    />
                                  </div>
                                  <a
                                    :href="item.href"
                                    class="mt-4 block font-medium text-gray-900"
                                  >
                                    <span
                                      class="absolute z-10 inset-0"
                                      aria-hidden="true"
                                    />
                                    {{ item.name }}
                                  </a>
                                  <p aria-hidden="true" class="mt-1">
                                    立即選購
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </PopoverPanel>
                      </transition>
                    </Popover>

                    <a
                      v-for="page in navigation.pages"
                      :key="page.name"
                      :href="page.href"
                      class="
                        flex
                        items-center
                        text-sm
                        font-medium
                        text-gray-700
                        hover:text-gray-800
                      "
                      >{{ page.name }}</a
                    >
                  </div>
                </PopoverGroup>
              </div>

              <!-- Mobile menu and search (lg-) -->
              <div class="flex-1 flex items-center lg:hidden">
                <button
                  type="button"
                  class="-ml-2 bg-white p-2 rounded-md text-gray-400"
                  @click="open = true"
                >
                  <span class="sr-only">Open menu</span>
                  <MenuIcon class="h-6 w-6" aria-hidden="true" />
                </button>
              </div>

              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Tea Fun Fast</span>
                <img src="images/logo.png" alt="" class="h-8 w-auto" />
              </a>

              <div class="flex-1 flex items-center justify-end">
                <div class="flex items-center lg:ml-8">
                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-8">
                    <a href="#" class="group -m-2 p-2 flex items-center">
                      <ShoppingBagIcon
                        class="
                          flex-shrink-0
                          h-6
                          w-6
                          text-gray-400
                          group-hover:text-gray-500
                        "
                        aria-hidden="true"
                      />
                      <span
                        class="
                          ml-2
                          text-sm
                          font-medium
                          text-gray-700
                          group-hover:text-gray-800
                        "
                        >0</span
                      >
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <main>
      <slot></slot>
    </main>

    <!-- Footer Content -->
    <footer aria-labelledby="footer-heading" class="bg-gray-50">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="border-t border-gray-200 py-20">
          <div
            class="
              grid grid-cols-1
              md:grid-cols-12 md:grid-flow-col
              md:gap-x-8 md:gap-y-16
              md:auto-rows-min
            "
          >
            <!-- Image section -->
            <div class="col-span-1 md:col-span-2 lg:row-start-1 lg:col-start-1">
              <img src="/images/logo.png" alt="" class="h-8 w-auto" />
            </div>

            <!-- Sitemap sections -->
            <div
              class="
                mt-10
                col-span-6
                grid grid-cols-2
                gap-8
                sm:grid-cols-3
                md:mt-0
                md:row-start-1
                md:col-start-3 md:col-span-8
                lg:col-start-3 lg:col-span-6
              "
            >
              <div
                class="
                  grid grid-cols-1
                  gap-y-12
                  sm:col-span-2
                  sm:grid-cols-2
                  sm:gap-x-8
                "
              >
                <div>
                  <h3 class="text-sm font-medium text-gray-900">客戶服務</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li
                      v-for="item in footerNavigation.customerService"
                      :key="item.name"
                      class="text-sm"
                    >
                      <a
                        target="_blank"
                        :href="item.href"
                        class="text-gray-500 hover:text-gray-600"
                      >
                        {{ item.name }}
                      </a>
                    </li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">
                    關於東方極速
                  </h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li
                      v-for="item in footerNavigation.company"
                      :key="item.name"
                      class="text-sm"
                    >
                      <a
                        target="_blank"
                        :href="item.href"
                        class="text-gray-500 hover:text-gray-600"
                      >
                        {{ item.name }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-100 py-10 text-center">
          <p class="text-sm text-gray-500">
            &copy; 2021 Tea Fun Fast. 版權所有。
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import { ref, defineComponent } from "vue";
import JetApplicationMark from "@/Jetstream/ApplicationMark.vue";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import {
  Dialog,
  DialogOverlay,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
  Tab,
  TabGroup,
  TabList,
  TabPanel,
  TabPanels,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import {
  MenuIcon,
  QuestionMarkCircleIcon,
  SearchIcon,
  ShoppingBagIcon,
  XIcon,
} from "@heroicons/vue/outline";

const currencies = ["全球"];
const footerNavigation = {
  company: [
    { name: "關於東方極速", href: route("about.show") },
    { name: "東方極速條款", href: route("terms.show") },
    { name: "隱私權政策", href: route("policy.show") },
  ],
  customerService: [
    { name: "常見問題", href: route("faq.show") },
    // { name: "退貨退款", href: "#" },
    // { name: "聯絡客服", href: "#" },
  ],
};
const navigation = {
  categories: [
    {
      name: "茶類",
      featured: [
        {
          name: "茶葉",
          href: "#",
          imageSrc:
            "https://7teahouse.com/sites/default/files/styles/ad_taxonomy/public/taxonomy/product_ad/1231.jpg?itok=E-NIH6BN",
          imageAlt:
            "Models sitting back to back, wearing Basic Tee in black and bone.",
        },
        {
          name: "茶包",
          href: "#",
          imageSrc:
            "https://7teahouse.com/sites/default/files/styles/ad_taxonomy/public/taxonomy/product_ad/%E8%8C%B6%E5%8C%851.jpg?itok=6Vrx8PYO",
          imageAlt:
            "Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees.",
        },
        {
          name: "禮盒",
          href: "#",
          imageSrc:
            "https://7teahouse.com/sites/default/files/styles/ad_taxonomy/public/taxonomy/product_ad/220x260.jpg?itok=OxciHeuM",
          imageAlt:
            "Model wearing minimalist watch with black wristband and white watch face.",
        },
      ],
    },
  ],
  pages: [
    { name: "香皂", href: "#" },
    { name: "蠟燭", href: "#" },
  ],
};

export default defineComponent({
  props: {
    title: String,
  },

  components: {
    Head,
    JetApplicationMark,
    JetBanner,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    JetResponsiveNavLink,
    Link,
    Dialog,
    DialogOverlay,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
    TransitionChild,
    TransitionRoot,
    MenuIcon,
    QuestionMarkCircleIcon,
    SearchIcon,
    ShoppingBagIcon,
    XIcon,
  },

  setup() {
    const open = ref(false);

    return {
      open,
      footerNavigation,
      currencies,
      navigation,
    };
  },

  methods: {
    //
  },
});
</script>
