    <!-- ====== Portfolio Section Start -->
    <section
      x-data="
        {
          showCards: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
      class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark"
    >
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary dark:text-white">
                My Portfolio
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white"
              >
                Our Most Recent Writings
              </h2>
              <p class="text-base text-body-color dark:text-white">
                Updating others soon.
              </p>
            </div>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4">
            <ul class="mb-12 flex flex-wrap justify-center space-x-1">
              <li class="mb-1">
                <button
                  @click="showCards = 'all' "
                  :class="showCards == 'all' ? activeClasses : inactiveClasses "
                  class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                >
                  All Projects
                </button>
              </li>
              <li class="mb-1">
                <button
                  @click="showCards = 'strapi' "
                  :class="showCards == 'strapi' ? activeClasses : inactiveClasses "
                  class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                >
                  Strapi
                </button>
              </li>
              <li class="mb-1">
                <button
                  @click="showCards = 'ComingSoon' "
                  :class="showCards == 'ComingSoon' ? activeClasses : inactiveClasses "
                  class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                >
                  Coming Soon
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="-mx-4 flex flex-wrap">
          <div
            :class="showCards == 'all' || showCards == 'strapi' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
          >
            <div class="relative mb-12">
              <div class="overflow-hidden rounded-lg">
                <img
                  src="{{ url('./img/strapi2.png')}}"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
              class="relative z-10 mx-7 -mt-20 rounded-lg dark:bg-dark bg-white py-9 px-3 text-center shadow-lg"
              >
                <span class="mb-2 block text-sm font-semibold dark:text-white text-primary">
                  Strapi
                </span>
                <h3 class="mb-4 text-xl font-bold dark:text-white text-dark">
                    6 Top Deployment Options For Your Strapi Application
                </h3>
                <a
                  href="https://strapi.io/blog/6-top-deployment-options-for-your-strapi-application"
                  class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white"
                >
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div
            :class="showCards == 'all' || showCards == 'strapi' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
          >
            <div class="relative mb-12">
              <div class="overflow-hidden rounded-lg">
                <img
                src="{{ url('./img/strapi1.png')}}"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
                class="relative z-10 mx-7 -mt-20 rounded-lg dark:bg-dark bg-white py-9 px-3 text-center shadow-lg"
              >
                <span class="mb-2 block text-sm font-semibold dark:text-white text-primary">
                  Strapi
                </span>
                <h3 class="mb-4 text-xl font-bold dark:text-white text-dark">
                    Deploying Strapi to Your Own VPS
                </h3>
                <a
                  href="https://strapi.io/blog/deploying-strapi-to-your-own-vps"
                  class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white"
                >
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div
            :class="showCards == 'all' || showCards == 'strapi' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
          >
            <div class="relative mb-12">
              <div class="overflow-hidden rounded-lg">
                <img
                  src="{{ url('./img/strapi3.png')}}"
                  alt="portfolio"
                  class="w-full"
                />
              </div>
              <div
              class="relative z-10 mx-7 -mt-20 rounded-lg dark:bg-dark bg-white py-9 px-3 text-center shadow-lg"
              >
                <span class="mb-2 block text-sm font-semibold dark:text-white text-primary">
                  Strapi
                </span>
                <h3 class="mb-4 text-xl font-bold dark:text-white text-dark">
                    Deploying Strapi MySQL on a Traditional Hosting Provider
                </h3>
                <a
                  href="https://strapi.io/blog/deploying-strapi-my-sql-on-a-traditional-hosting-provider"
                  class="inline-block rounded-md border py-3 px-7 text-sm font-semibold text-body-color transition hover:border-primary hover:bg-primary hover:text-white"
                >
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Portfolio Section End -->