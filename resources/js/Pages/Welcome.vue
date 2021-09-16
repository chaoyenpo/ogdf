<template>
  <welcome-layout title="東方極速">
    <!-- Hero section -->
    <div class="relative">
      <!-- Background image and overlap -->
      <div
        aria-hidden="true"
        class="hidden absolute inset-0 sm:flex sm:flex-col"
      >
        <div class="flex-1 relative w-full bg-gray-800">
          <div class="absolute inset-0 overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1586647862896-81bca535eb8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2689&q=80"
              alt=""
              class="w-full h-full object-center object-cover"
            />
          </div>
          <div class="absolute inset-0 bg-gray-900 opacity-50" />
        </div>
        <div class="w-full bg-white h-32 md:h-40 lg:h-48" />
      </div>

      <div
        class="
          relative
          max-w-3xl
          mx-auto
          pb-96
          px-4
          text-center
          sm:pb-0
          sm:px-6
          lg:px-8
        "
      >
        <!-- Background image and overlap -->
        <div
          aria-hidden="true"
          class="absolute inset-0 flex flex-col sm:hidden"
        >
          <div class="flex-1 relative w-full bg-gray-800">
            <div class="absolute inset-0 overflow-hidden">
              <img
                src="https://tailwindui.com/img/ecommerce-images/home-page-04-hero-full-width.jpg"
                alt=""
                class="w-full h-full object-center object-cover"
              />
            </div>
            <div class="absolute inset-0 bg-gray-900 opacity-50" />
          </div>
          <div class="w-full bg-white h-48" />
        </div>
        <div class="relative py-32">
          <h1
            class="
              text-4xl
              font-extrabold
              tracking-tight
              text-white
              sm:text-5xl
              md:text-6xl
            "
          >
            TEA FUN FAST
          </h1>
          <h1
            class="
              text-4xl
              font-extrabold
              tracking-tight
              text-white
              sm:text-5xl
              md:text-6xl
            "
          >
            慶開幕全館免運
          </h1>
          <div class="mt-4 sm:mt-6">
            <a
              href="/products"
              class="
                inline-block
                bg-green-600
                border border-transparent
                rounded-md
                py-3
                px-8
                font-medium
                text-white
                hover:bg-green-700
              "
              >搶購去</a
            >
          </div>
        </div>
      </div>

      <section
        aria-labelledby="collection-heading"
        class="-mt-96 relative sm:mt-0"
      >
        <h2 id="collection-heading" class="sr-only">Collections</h2>
        <div
          class="
            max-w-md
            mx-auto
            grid grid-cols-1
            gap-y-6
            px-4
            sm:max-w-7xl
            sm:px-6
            sm:grid-cols-3
            sm:gap-y-0 sm:gap-x-6
            lg:px-8
            lg:gap-x-8
          "
        >
          <div
            v-for="collection in collections"
            :key="collection.name"
            class="
              group
              relative
              h-96
              bg-white
              rounded-lg
              shadow-xl
              sm:h-auto
              sm:aspect-w-4 sm:aspect-h-5
            "
          >
            <div>
              <div
                aria-hidden="true"
                class="absolute inset-0 rounded-lg overflow-hidden"
              >
                <div
                  class="
                    absolute
                    inset-0
                    overflow-hidden
                    group-hover:opacity-75
                  "
                >
                  <img
                    :src="collection.imageSrc"
                    :alt="collection.imageAlt"
                    class="w-full h-full object-center object-cover"
                  />
                </div>
                <div
                  class="
                    absolute
                    inset-0
                    bg-gradient-to-b
                    from-transparent
                    to-black
                    opacity-50
                  "
                />
              </div>
              <div class="absolute inset-0 rounded-lg p-6 flex items-end">
                <div>
                  <p aria-hidden="true" class="text-sm text-white">這裡找</p>
                  <h3 class="mt-1 font-semibold text-white">
                    <a :href="collection.href">
                      <span class="absolute inset-0" />
                      {{ collection.name }}
                    </a>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="bg-white">
      <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="relative rounded-lg overflow-hidden">
          <div class="absolute inset-0">
            <img
              src="https://images.unsplash.com/photo-1551075649-8fdfd4c6f842?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80"
              alt=""
              class="w-full h-full object-center object-cover"
            />
          </div>
          <div
            class="
              relative
              bg-gray-900 bg-opacity-75
              py-32
              px-6
              sm:py-40
              sm:px-12
              lg:px-16
            "
          >
            <div
              class="
                relative
                max-w-3xl
                mx-auto
                flex flex-col
                items-center
                text-center
              "
            >
              <h2
                class="
                  text-3xl
                  font-extrabold
                  tracking-tight
                  text-white
                  sm:text-4xl
                "
              >
                <span class="block sm:inline">關於</span>
                <span class="block sm:inline">東方極速</span>
              </h2>
              <p class="mt-3 text-xl text-white">
                在現代忙碌的生活當中，你可曾慢下腳步享受悠哉的購物時光？
              </p>
              <p class="mt-3 text-xl text-white">
                或許你忙於打拼生活、照顧家庭，無暇精心挑選屬意的商品。但請別灰心，「東方極速」提供最快速、便捷的購物網，主打銷售全球各精品奢華品牌，不但有品質保障，更讓你買的安心、用的放心。<br />
              </p>
              <p class="mt-3 text-xl text-white">
                「東方極速」除了有快速運送服務外，也將迅速融入東、西方文化特產做為交流，致力成為東方國家最具有代表性的購物網。即使不出國，也能買遍各國特色商品。
              </p>
              <a
                href="/products"
                class="
                  mt-8
                  w-full
                  block
                  bg-white
                  border border-transparent
                  rounded-md
                  py-3
                  px-8
                  text-base
                  font-medium
                  text-gray-900
                  hover:bg-gray-100
                  sm:w-auto
                "
                >探索商品</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <section aria-labelledby="trending-heading">
      <div
        class="
          max-w-7xl
          mx-auto
          py-24
          px-4
          sm:px-6
          sm:py-32
          lg:pt-32
          lg:px-8
          hidden
        "
      >
        <div class="md:flex md:items-center md:justify-between">
          <h2
            id="favorites-heading"
            class="text-2xl font-extrabold tracking-tight text-gray-900"
          >
            熱賣商品
          </h2>
          <a
            href="/products"
            class="
              hidden
              text-sm
              font-medium
              text-green-600
              hover:text-green-500
              md:block
            "
            >探索所有熱賣商品<span aria-hidden="true"> &rarr;</span></a
          >
        </div>

        <div
          class="
            mt-6
            grid grid-cols-2
            gap-x-4 gap-y-10
            sm:gap-x-6
            md:grid-cols-4
            md:gap-y-0
            lg:gap-x-8
          "
        >
          <div
            v-for="product in trendingProducts"
            :key="product.id"
            class="group relative"
          >
            <div
              class="
                w-full
                h-56
                rounded-md
                overflow-hidden
                group-hover:opacity-75
                lg:h-72
                xl:h-80
              "
            >
              <img
                :src="product.image_src"
                class="w-full h-full object-center object-cover"
              />
            </div>
            <h3 class="mt-4 text-sm text-gray-700">
              <a :href="`/buy/${product.id}`">
                <span class="absolute inset-0" />
                {{ product.name }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ product.category }}</p>
            <p class="mt-1 text-sm font-medium text-gray-900">
              ${{ product.price }}
            </p>
          </div>
        </div>

        <div class="mt-8 text-sm md:hidden">
          <a
            href="/products"
            class="font-medium text-green-600 hover:text-green-500"
            >探索所有熱賣商品<span aria-hidden="true"> &rarr;</span></a
          >
        </div>
      </div>
    </section>

    <section
      aria-labelledby="perks-heading"
      class="bg-gray-50 border-t border-gray-200 hidden"
    >
      <h2 id="perks-heading" class="sr-only">Our perks</h2>

      <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 sm:py-32 lg:px-8">
        <div
          class="
            grid grid-cols-1
            gap-y-12
            sm:grid-cols-2
            sm:gap-x-6
            lg:grid-cols-4
            lg:gap-x-8 lg:gap-y-0
          "
        >
          <div
            v-for="perk in perks"
            :key="perk.name"
            class="
              text-center
              md:flex
              md:items-start
              md:text-left
              lg:block
              lg:text-center
            "
          >
            <div class="md:flex-shrink-0">
              <div class="flow-root">
                <img
                  class="-my-1 h-24 w-auto mx-auto"
                  :src="perk.imageUrl"
                  alt=""
                />
              </div>
            </div>
            <div class="mt-6 md:mt-0 md:ml-4 lg:mt-6 lg:ml-0">
              <h3
                class="
                  text-sm
                  font-semibold
                  tracking-wide
                  uppercase
                  text-gray-900
                "
              >
                {{ perk.name }}
              </h3>
              <p class="mt-3 text-sm text-gray-500">
                {{ perk.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </welcome-layout>
</template>

<script>
import { ref, defineComponent } from "vue";
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
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";

const collections = [
  {
    name: "茶類",
    href: "/products",
    imageSrc:
      "https://images.unsplash.com/photo-1532136868905-8094ef8ef5f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=884&q=80",
    imageAlt: "Woman wearing a comfortable cotton t-shirt.",
  },
  {
    name: "香皂",
    href: "/products",
    imageSrc:
      "https://images.unsplash.com/photo-1605264964528-06403738d6dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80",
    imageAlt: "Man wearing a comfortable and casual cotton t-shirt.",
  },
  {
    name: "蠟燭",
    href: "/products",
    imageSrc:
      "https://images.unsplash.com/photo-1619695662967-3e739a597f47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=934&q=80",
    imageAlt:
      "Person sitting at a wooden desk with paper note organizer, pencil and tablet.",
  },
];
const perks = [
  {
    name: "免費退貨",
    imageUrl:
      "https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg",
    description: "不是你所期望的？將其放回包裹中並貼上預付郵票。",
  },
  {
    name: "當天發貨",
    imageUrl:
      "https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg",
    description:
      "我們提供前所未有的送貨服務。立即結帳並在數小時內收到您的產品。",
  },
  {
    name: "全年折扣",
    imageUrl:
      "https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg",
    description: '您可以在結帳時使用代碼"TEA FUN FAST"，全年均可享受折扣。',
  },
  {
    name: "為了這個星球",
    imageUrl:
      "https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg",
    description: "我們承諾將銷售額的 1% 用於保護和恢復自然環境。",
  },
];

export default defineComponent({
  components: {
    WelcomeLayout,
    Head,
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

  props: {
    trendingProducts: Array,
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },

  setup() {
    const open = ref(false);

    return {
      collections,
      perks,
      open,
    };
  },
});
</script>
