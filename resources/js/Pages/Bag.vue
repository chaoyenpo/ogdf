<template>
  <welcome-layout title="購物袋">
    <div v-if="subtotal === 0">
      <div class="max-w-4xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">
          購物袋中沒有任何商品。
          <div class="mt-6 text-base text-gray-500">
            <p>
              <a
                href="/products"
                class="text-green-600 font-medium hover:text-green-500"
                >繼續選購<span aria-hidden="true"> &rarr;</span></a
              >
            </p>
          </div>
        </h1>
      </div>
    </div>
    <div class="bg-white" v-else>
      <div class="max-w-4xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">
          以下是你購物袋內的商品 ${{
            Number(subtotal.toFixed(1)).toLocaleString()
          }}。
        </h1>

        <form class="mt-12">
          <div>
            <h2 class="sr-only">Items in your shopping cart</h2>

            <ul
              role="list"
              class="border-t border-b border-gray-200 divide-y divide-gray-200"
            >
              <li
                v-for="(product, productIdx) in products"
                :key="product.id"
                class="flex py-6 sm:py-10"
              >
                <div class="flex-shrink-0">
                  <img
                    :src="product.image_src"
                    class="
                      w-24
                      h-24
                      rounded-lg
                      object-center object-cover
                      sm:w-32
                      sm:h-32
                    "
                  />
                </div>

                <div
                  class="
                    relative
                    ml-4
                    flex-1 flex flex-col
                    justify-between
                    sm:ml-6
                  "
                >
                  <div>
                    <div class="flex justify-between sm:grid sm:grid-cols-2">
                      <div class="pr-6">
                        <h3 class="text-sm">
                          <a
                            :href="product.href"
                            class="
                              font-medium
                              text-gray-700
                              hover:text-gray-800
                            "
                          >
                            {{ product.name }}
                          </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                          {{ product.category }}
                        </p>
                      </div>

                      <p class="text-sm font-medium text-gray-900 text-right">
                        ${{
                          Number(
                            (product.price * product.quantity).toFixed(1)
                          ).toLocaleString()
                        }}
                      </p>
                    </div>

                    <div
                      class="
                        mt-4
                        flex
                        items-center
                        sm:block
                        sm:absolute
                        sm:top-0
                        sm:left-1/2
                        sm:mt-0
                      "
                    >
                      <label :for="`quantity-${productIdx}`" class="sr-only"
                        >Quantity, {{ product.name }}</label
                      >
                      <select
                        :id="`quantity-${productIdx}`"
                        :name="`quantity-${productIdx}`"
                        v-model="product.quantity"
                        @change="(e) => changeQuantity(product.id, e)"
                        class="
                          block
                          max-w-full
                          rounded-md
                          border border-gray-300
                          py-1.5
                          text-base
                          leading-5
                          font-medium
                          text-gray-700 text-left
                          shadow-sm
                          focus:outline-none
                          focus:ring-1 focus:ring-green-500
                          focus:border-green-500
                          sm:text-sm
                        "
                      >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>

                      <button
                        type="button"
                        class="
                          ml-4
                          text-sm
                          font-medium
                          text-green-600
                          hover:text-green-500
                          sm:ml-0
                          sm:mt-3
                        "
                        @click="() => removeToBag(product.id)"
                      >
                        <span>移除</span>
                      </button>
                    </div>
                  </div>

                  <p class="mt-4 flex text-sm text-gray-700 space-x-2">
                    <CheckIcon
                      v-if="product.inStock"
                      class="flex-shrink-0 h-5 w-5 text-green-500"
                      aria-hidden="true"
                    />
                    <ClockIcon
                      v-else
                      class="flex-shrink-0 h-5 w-5 text-gray-300"
                      aria-hidden="true"
                    />
                    <span>有現貨且可出貨。</span>
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <!-- Order summary -->
          <div class="mt-10 sm:ml-32 sm:pl-6">
            <div class="bg-gray-50 rounded-lg px-4 py-6 sm:p-6 lg:p-8">
              <h2 class="sr-only">Order summary</h2>

              <div class="flow-root">
                <dl class="-my-4 text-sm divide-y divide-gray-200">
                  <div class="py-4 flex items-center justify-between">
                    <dt class="text-gray-600">小計</dt>
                    <dd class="font-medium text-gray-900">
                      ${{ Number(subtotal.toFixed(1)).toLocaleString() }}
                    </dd>
                  </div>
                  <div class="py-4 flex items-center justify-between">
                    <dt class="text-gray-600">運費</dt>
                    <dd class="font-medium text-gray-900">免額外付費</dd>
                  </div>
                  <div>
                    <div class="py-4 flex items-center justify-between">
                      <dt class="text-base font-medium text-gray-900">
                        你的總金額
                      </dt>
                      <dd class="text-base font-medium text-gray-900">
                        ${{ Number(subtotal.toFixed(1)).toLocaleString() }}
                      </dd>
                    </div>
                    <div class="flex flex-row-reverse -mt-4">
                      <dd class="text-xs text-gray-500">
                        含加值型營業稅 ${{
                          Number(tax.toFixed(1)).toLocaleString()
                        }}
                      </dd>
                    </div>
                  </div>
                </dl>
              </div>
            </div>
            <div class="mt-10">
              <button
                type="button"
                class="
                  w-full
                  bg-green-600
                  border border-transparent
                  rounded-md
                  shadow-sm
                  py-3
                  px-4
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
                @click="login"
              >
                結帳
              </button>
            </div>

            <div class="mt-6 text-sm text-center text-gray-500">
              <p>
                <a
                  href="/products"
                  class="text-green-600 font-medium hover:text-green-500"
                  >繼續選購<span aria-hidden="true"> &rarr;</span></a
                >
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </welcome-layout>
</template>

<script>
import { defineComponent } from "vue";
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";
import { CheckIcon, ClockIcon } from "@heroicons/vue/solid";
import Cookies from "js-cookie";

export default defineComponent({
  components: {
    WelcomeLayout,
    CheckIcon,
    ClockIcon,
  },

  props: ["products", "subtotal", "tax"],

  setup() {
    function login() {
      this.$inertia.get(route("login"));
    }

    function removeToBag(id) {
      let bags = Cookies.get("b") ? JSON.parse(Cookies.get("b")) : {};
      delete bags[id];
      Cookies.set("b", JSON.stringify(bags));
      this.$inertia.get(
        route("bag.show"),
        {},
        {
          preserveScroll: true,
        }
      );
    }

    function changeQuantity(id, e) {
      let bags = Cookies.get("b") ? JSON.parse(Cookies.get("b")) : {};
      bags = { ...bags, [id]: { q: e.target.value } };
      Cookies.set("b", JSON.stringify(bags));
      this.$inertia.get(
        route("bag.show"),
        {},
        {
          preserveScroll: true,
        }
      );
    }

    return {
      login,
      removeToBag,
      changeQuantity,
    };
  },
});
</script>
