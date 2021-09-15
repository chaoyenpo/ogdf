<template>
  <welcome-layout title="根據 props">
    <div class="bg-white">
      <div
        class="
          max-w-2xl
          mx-auto
          py-16
          px-4
          sm:py-24
          sm:px-6
          lg:max-w-7xl
          lg:px-8
          lg:grid lg:grid-cols-2
          lg:gap-x-8
        "
      >
        <!-- Product details -->
        <div class="lg:max-w-lg lg:self-end">
          <div>
            <h1
              class="
                text-3xl
                font-extrabold
                tracking-tight
                text-gray-900
                sm:text-4xl
              "
            >
              {{ product.name }}
            </h1>
          </div>

          <section aria-labelledby="information-heading" class="mt-4">
            <h2 id="information-heading" class="sr-only">
              Product information
            </h2>

            <div class="flex items-center">
              <p class="text-lg text-gray-900 sm:text-xl">
                ${{ product.price }}
              </p>
            </div>

            <div class="mt-4 space-y-6">
              <p class="text-base text-gray-500">{{ product.description }}</p>
            </div>

            <div class="mt-6 flex items-center">
              <CheckIcon
                class="flex-shrink-0 w-5 h-5 text-green-500"
                aria-hidden="true"
              />
              <p class="ml-2 text-sm text-gray-500">有現貨</p>
            </div>
          </section>
        </div>

        <!-- Product image -->
        <div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
          <div class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden">
            <img
              :src="product.image_src"
              class="w-full h-full object-center object-cover"
            />
          </div>
        </div>

        <!-- Product form -->
        <div
          class="mt-10 lg:max-w-lg lg:col-start-1 lg:row-start-2 lg:self-start"
        >
          <section aria-labelledby="options-heading">
            <h2 id="options-heading" class="sr-only">Product options</h2>

            <form>
              <div class="sm:flex sm:justify-between">
                <!-- Size selector -->
                <RadioGroup v-model="selectedSize">
                  <RadioGroupLabel
                    class="block text-sm font-medium text-gray-700"
                  >
                    選擇包裝
                  </RadioGroupLabel>
                  <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <RadioGroupOption
                      as="template"
                      v-for="size in product.sizes"
                      :key="size.name"
                      :value="size"
                      v-slot="{ active, checked }"
                    >
                      <div
                        :class="[
                          active ? 'ring-2 ring-green-500' : '',
                          'relative block border border-gray-300 rounded-lg p-4 cursor-pointer focus:outline-none',
                        ]"
                      >
                        <RadioGroupLabel
                          as="p"
                          class="text-base font-medium text-gray-900"
                        >
                          {{ size.name }}
                        </RadioGroupLabel>
                        <RadioGroupDescription
                          as="p"
                          class="mt-1 text-sm text-gray-500"
                        >
                          {{ size.description }}
                        </RadioGroupDescription>
                        <div
                          :class="[
                            active ? 'border' : 'border-2',
                            checked ? 'border-green-500' : 'border-transparent',
                            'absolute -inset-px rounded-lg pointer-events-none',
                          ]"
                          aria-hidden="true"
                        />
                      </div>
                    </RadioGroupOption>
                  </div>
                </RadioGroup>
              </div>
              <div class="mt-10">
                <button
                  type="submit"
                  class="
                    w-full
                    bg-green-600
                    border border-transparent
                    rounded-md
                    py-3
                    px-8
                    flex
                    items-center
                    justify-center
                    text-base
                    font-medium
                    text-white
                    hover:bg-green-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-offset-gray-50
                    focus:ring-green-500
                  "
                >
                  加入購物袋
                </button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </welcome-layout>
</template>

<script>
import { ref, defineComponent } from "vue";
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";
import {
  CheckIcon,
  QuestionMarkCircleIcon,
  StarIcon,
} from "@heroicons/vue/solid";
import {
  RadioGroup,
  RadioGroupDescription,
  RadioGroupLabel,
  RadioGroupOption,
} from "@headlessui/vue";
import { ShieldCheckIcon } from "@heroicons/vue/outline";

const product = {
  name: "三峽碧螺春",
  href: "#",
  price: "NT$320",
  description: "完美栽培的一根樹枝。",
  imageSrc:
    "https://7teahouse.com/sites/default/files/styles/vt_commerce_image_large/public/product/_G108423_0.JPG?itok=EPSki057",
  imageAlt:
    "Model wearing light green backpack with black canvas straps and front zipper pouch.",
  breadcrumbs: [
    { id: 1, name: "Travel", href: "#" },
    { id: 2, name: "Bags", href: "#" },
  ],
  sizes: [{ name: "盒裝", description: "目前都是 1 盒 10 包裝為單位" }],
};

export default defineComponent({
  components: {
    WelcomeLayout,
    RadioGroup,
    RadioGroupDescription,
    RadioGroupLabel,
    RadioGroupOption,
    CheckIcon,
    QuestionMarkCircleIcon,
    ShieldCheckIcon,
    StarIcon,
  },

  props: ["product"],

  setup() {
    const selectedSize = ref(product.sizes[0]);

    return {
      selectedSize,
    };
  },
});
</script>
