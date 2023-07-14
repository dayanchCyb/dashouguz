@extends('dashoguz.layouts.app')
@section('content')
        <div class="banner">
          <div class="banner-swiper swiper mySwiper">
            <div class="banner-swiper__wrapper swiper-wrapper">
              <div class="banner-swiper__slide swiper-slide">
                <img src="{{ asset('img/kamaz_1.jpg') }}" alt="" />
                <div class="banner-swiper__content-container">
                  <div class="banner-swiper__content">
									<h2>"Mary awtoulag" <br>
										Önümçilik birleşigi</h2>
                  </div>
                </div>
              </div>
              <div class="banner-swiper__slide swiper-slide">
                <img src="{{ asset('img/CHR_1770+-min.jpg') }}" alt="" />
                <div class="banner-swiper__content-container">
                  <div class="banner-swiper__content">
									<h2>"Mary awtoulag" <br>
										Önümçilik birleşigi</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="__container pr">
              <div class="banner-swiper__pagination swiper-pagination"></div>
            </div>
          </div>
        </div>
        <div class="about">
          <div class="about__container __container">
            <div class="about__body">
              <h3 class="about__title">Kärhana barada</h3>
              <div class="about__row">
                <p class="about__description">
									"Türmenawtoulaglary" agentiliginiň 2020-nji ýylyň 31-nji martyndaky çykaran 33-Ö belgili buýrugy esasynda gaýtadan bellige alynan kärhanadyr. "MaryAwtoulag" önümçilik birleşigi oz işini Türkmenistanyň kanunlara we beýleki hereket edýän kanunçylyk hukuknamalaryna, "Türkmenawtoulaglary" agentliginiň buýruklaryna we görkezmelerine, Birleşigiň tertipnamasyna laýyklykda alyp barýar.
                </p>
                <div class="about__image">
                  <img src="{{ asset('img/maryawtolag.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="other-routes">
          <section class="other-routes">
          <div class="__container">
            <div class="other-routes__row">
              <a href="/services" class="other-routes__column">
                <div class="other-routes__image">
                  <img src="{{ asset('services-icon.svg') }}" alt="" />
                </div>
                <p class="other-routes__title">Hyzmatlarymyz</p>
              </a>
              <a href="/traffics" class="other-routes__column">
                <div class="other-routes__image">
                <img src="{{ asset('travelers.svg') }}" alt="" />
                </div>
                <p class="other-routes__title">Gatnawlar</p>
              </a>
            </div>
          </div>
        </section> 
        </div>
        <div class="orders">
          <div class="orders__background">
            <div class="orders__container __container">
              <h3 class="orders__title">Sargytlar</h3>
              <div class="orders__flex">
                <button class="orders__button _active">
                  <img src="{{ asset('checked.svg') }}" alt="" class="orders__button-checked"/>
                  <img src="{{ asset('unchecked.svg') }}" alt="" class="orders__button-unchecked"/>
                  <p>Fiziki şahs</p>
                </button>
                <button class="orders__button">
									<img src="{{ asset('checked.svg') }}" alt="" class="orders__button-checked"/>
                  <img src="{{ asset('unchecked.svg') }}" alt="" class="orders__button-unchecked"/>
                  <p>Ýuridiki şahs</p>
                </button>
              </div>
              <div class="orders__body _active">
                <div class="orders__row">
                  <div class="orders__input">
                    <h4 class="orders__input-label">Familiýaňyz, adyňyz</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">
                      Ulagyň barmaly senesi we sagady
                    </h4>
                    <input type="calendar" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Nireden</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Nirä</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">E-mail</h4>
                    <input type="email" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Telefon belgiňiz</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Sargydyň dowamlylygy</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Awtobusyň sany</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__textarea">
                    <h4 class="orders__input-label">Awtobusyň sany</h4>
                    <textarea rows="5"></textarea>
                  </div>
                </div>
              </div>
							<div class="orders__body">
                <div class="orders__row">
                  <div class="orders__input">
                    <h4 class="orders__input-label">Familiýaňyz, adyňyz</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">
                      Ulagyň barmaly senesi we sagady
                    </h4>
                    <input type="calendar" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Nireden</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Nirä</h4>
                    <input type="text" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">E-mail</h4>
                    <input type="email" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Telefon belgiňiz</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Sargydyň dowamlylygy</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__input">
                    <h4 class="orders__input-label">Awtobusyň sany</h4>
                    <input type="number" placeholder="Giriziň..." />
                  </div>
                  <div class="orders__textarea">
                    <h4 class="orders__input-label">Awtobusyň sany</h4>
                    <textarea rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
