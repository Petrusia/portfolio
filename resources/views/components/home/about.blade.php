<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('img/gravitas2.png)') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/gravitas3.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/gravitas2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-6 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 «Все можна досягти наполегливою працею»
             </blockquote>
          </span>
          <h4 class="font-bold text-lg sm:text-lg dark:text-gray-200 mb-8">
            Українське відділення
          </h4>
          <h2 class="font-bold text-2xl sm:text-3xl dark:text-gray-200 mb-8">
            GRAVITAS SCHOLA
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">

            Навчання за литовською програмою українською мовою з вивченням литовської мови та історії Литви в обсязі, передбаченому навчальною програмою Литви.  <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            Вивчення англійської за системою Cambridge English for Schools. Напрямки навчання в середній та старшій школі — математика та інформатика, біологія та хімія. <br />
          </p>
          <x-button-link href="https://www.gravitation.org.ua/" variant="green" target="_blank">
            Школа Гравітації
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
