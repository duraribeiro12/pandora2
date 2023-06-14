<?php

if(!isset($_SESSION)) {
	session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pandora Hotel</title>
  <!-- fonte link cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!--  tem efeito de deslizar -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- link css personalizado -->
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="images/icon3.png">
  
</head>
<body>
  


  <!-- header/cabeçalho -->

  <header class="header">
     <div class="icon">
        <img src="images/icon4.png" alt="" width="54px" height="81px" >  
     </div>

     <a href="#" class="logo"></a>

     
   

     <!--<a href="#" class="logo">  <i class="fas fa-hotel"></i>Pandora Hotel </a>-->

     <nav class="navbar">
        <a href="#home">home</a>
        <a href="#sobre">Sobre</a>
        <a href="#quarto">Quartos</a>
        <a href="#hoteis">Hotéis</a>
        <a href="#galeria">Galeria</a>
        <a href="#avaliacao">Avaliação</a>
        <a href="http://localhost/pandora/login.php">Sair</a>
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>

  </header>

  <!-- end -->

  <!-- home -->

  <section class="home" id="home">

     <div class="swiper home-slider">

        <div class="swiper-wrapper">

           <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat;">
              <div class="content">
                 <h3>É onde os sonhos se tornam realidade</h3>
                 <a href="#oferta" class="btn"> visite nossa oferta</a>
              </div>
           </div>

           <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat;">
              <div class="content">
                 <h3>É onde os sonhos se tornam realidade</h3>
                 <a href="#oferta" class="btn"> visite nossa oferta</a>
              </div>
           </div>

           <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg) no-repeat;">
              <div class="content">
                 <h3>É onde os sonhos se tornam realidade</h3>
                 <a href="#oferta" class="btn"> visite nossa oferta</a>
              </div>
           </div>

           <div class="swiper-slide slide" style="background: url(images/home-slide4.jpg) no-repeat;">
              <div class="content">
                 <h3>É onde os sonhos se tornam realidade</h3>
                 <a href="#oferta" class="btn"> visite nossa oferta</a>
              </div>
           </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

     </div>

  </section>

  <!-- end -->

  <!-- availability -->

  <section class="availability">

     <form action="">

        <div class="box">
           <p>entrada <span>*</span></p>
           <input type="date" class="input">
        </div>

        <div class="box">
           <p>saída <span>*</span></p>
           <input type="date" class="input">
        </div>

        <div class="box">
           <p>Adultos <span>*</span></p>
           <select name="adultos" id="" class="input">
              <option value="1">1 Adulto</option>
              <option value="2">2 Adultos</option>
              <option value="3">3 Adultos</option>
              <option value="4">4 Adultos</option>
              <option value="5">5 Adultos</option>
              <option value="6">6 Adultos</option>
           </select>
        </div>


        <div class="box">
           <p>Crianças <span>*</span></p>
           <select name="criancas" id="" class="input">
            <option value="">selecione</option>
            <option value="1">nenhuma</option>
              <option value="2">1 Criança</option>
              <option value="3">2 Crianças</option>
              <option value="4">3 Crianças</option>
              <option value="5">4 Crianças</option>
              <option value="6">5 Crianças</option>
              <option value="7">6 Crianças</option>
           </select>
        </div>


        <div class="box">
           <p>Quartos <span>*</span></p>
           <select name="quartos" id="" class="input">
              <option value="1">1 Quarto</option>
              <option value="2">2 Quartos</option>
              <option value="3">3 Quartos</option>
              <option value="4">4 Quartos</option>
              <option value="5">5 Quartos</option>
              <option value="6">6 Quartos</option>
           </select>
        </div>


        <input type="submit" value="Pesquisar" class="btn">

     </form>

  </section>

  <!-- fim -->


  <!-- sobre -->


  <section class="about" id="sobre"> <!-- about por sobre-->

     <div class="row"> <!-- row/linha-->

        <div class="image">
           <img src="images/sobre.jpg" alt="">
        </div>

        <div class="content">
           <h3>Sobre nós</h3>
           <p>Escolher uma boa hospedagem é parte essencial para curtir as férias. Então, você precisa conhecer Pandora. Excelente localização, próximo dos principais pontos turísticos da cidade. Ainda, organizamos passeios guiados para pontos mais distantes e imperdíveis! Pandora, comodidade e conforto na sua estadia!</p>
       
        </div>

     </div>

  </section>

  <!-- fim -->

  <!-- quartos -->

  <section class="room" id="quarto"> <!-- room por quartos -->

   <h1 class="heading">Nossos quartos</h1>

   <div class="swiper room-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/room-1.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo</h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/room-2.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo</h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/room-3.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo</h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/room-4.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo</h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/quarto-5.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo </h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 349,99/noite</span>
               <img src="images/room-6.1.jpg" alt="">
               <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo</h3>
               <p>Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



<!-- end -->

<!-- Hoteis -->

<section class="room" id="hoteis"> <!-- room por quartos -->

   <h1 class="heading">Hotéis</h1>

   <div class="swiper room-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price">Rio de Janeiro</span>
               <img src="images/hotel1.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Copacabana Palace, A Belmond Hotel</h3>
               <p>Suas férias estão aqui!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price">Natal</span>
               <img src="images/hotel6.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Ocean Palace Beach Resort & Bungalows</h3>
               <p>Para pessoas sempre exigentes.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> São Paulo</span>
               <img src="images/hotel3.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Palácio Tangará Executive</h3>
               <p>Um lugar onde você terá socego e diversas praias a sua disposição.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price">Amazonas</span>
               <img src="images/hotel4.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Tropical Hotel Executive</h3>
               <p>O hotel com a localização mais espetacular de Manaus.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price">Fortaleza </span>
               <img src="images/hotel5.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Holiday Inn Fortaleza
               </h3>
               <p>Um lugar onde você terá socego e diversas praias a sua disposição.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> Rio de Janeiro</span>
               <img src="images/hotel2.jpg" alt="">
               <a href="#" class=""></a>
            </div>
            <div class="content">
               <h3>Hilton Barra Hotel</h3>
               <p>Se é Lazer que você e sua família procura, essa é uma ótima opção!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>



<!-- end -->

<!--ofertas-->

<section class="room" id="ofertas"> <!-- room por quartos -->

   <h1 class="heading">Nossas Ofertas</h1>

   <div class="swiper room-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 280,00/noite</span>
               <img src="images/oferta1.jpg" id="oferta" alt="">
               <a href="#oferta" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo - Oferta</h3>
               <p>Oferta de 20% de desconto. <br>
                  Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>


         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 280,00/noite</span>
               <img src="images/oferta2.jpg" id="oferta" alt="">
               <a href="#oferta" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo - Oferta</h3>
               <p>Oferta de 20% de desconto. <br>
                  Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>


         <div class="swiper-slide slide">
            <div class="image">
               <span class="price"> 280,00/noite</span>
               <img src="images/oferta3.jpg" id="oferta" alt="">
               <a href="#oferta" class="fas fa-shopping-cart"></a>
            </div>
            <div class="content">
               <h3>Quarto exclusivo - Oferta</h3>
               <p>Oferta de 20% de desconto. <br>
                  Nossos quartos estão prontos para você descansar o corpo e relaxar a mente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <a href="#" class="btn">Reservar agora</a>
            </div>
         </div>
         
       </div>

       <div class="swiper-pagination"></div>

    </div>

</section>


 <!-- end -->

  <!-- services -->

  <section class="services">

     <div class="box-container">

        <div class="box">
           <img src="images/service1.png" alt="">
           <h3>Piscina</h3>
        </div>

        <div class="box">
           <img src="images/service2.png" alt="">
           <h3>Comida & Bebida</h3>
        </div>

        <div class="box">
           <img src="images/service3.png" alt="">
           <h3>Restaurante</h3>
        </div>

        <div class="box">
           <img src="images/service4.png" alt="">
           <h3>Academia</h3>
        </div>

        <div class="box">
           <img src="images/service5.png" alt="">
           <h3>Spa de beleza</h3>
        </div>

        <div class="box">
           <img src="images/service6.png" alt="">
           <h3>Praia resort</h3>
        </div>

     </div>

  </section>

  <!-- end -->

  <!-- gallery -->

  <section class="gallery" id="galeria">

     <h1 class="heading">Nossa galeria</h1>

     <div class="swiper gallery-slider">

        <div class="swiper-wrapper">

           <div class="swiper-slide slide">
              <img src="images/gallery1.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

           <div class="swiper-slide slide">
              <img src="images/gallery2.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

           <div class="swiper-slide slide">
              <img src="images/gallery3.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

           <div class="swiper-slide slide">
              <img src="images/gallery4.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

           <div class="swiper-slide slide">
              <img src="images/gallery5.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

           <div class="swiper-slide slide">
              <img src="images/gallery6.jpg" alt="">
              <div class="icon">
                 <i class="fas fa-magnifying-glass-plus"></i>
              </div>
           </div>

        </div>

     </div>

  </section>

  <!-- end -->

  <!-- avaliação -->

  <section class="review" id="avaliacao">

     <div class="swiper review-slider">
        <div class="swiper-wrapper">

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>Sou grato pela a atenção, sinceramente não tenho o que falar de negativo, foi prazeroso a experiência de me hospedar com vocês. até a próxima! 15/05/22</p>
              <div class="user">
                 <img src="images/pic-1.png" alt="">
                 <div class="user-info">
                    <h3>Marcos Silva</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>Para quem quer fugir da rotina? Aqui é o local ideal, eles oferecem um excelente atendimeto e tranquilidade que você precisa. 21/06/23</p>
              <div class="user">
                 <img src="images/pic-2.png" alt="">
                 <div class="user-info">
                    <h3>Sandra Vitarelli </h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>Localização privilegiada, atendimento de todos colaboradores excelente, quarto bem confortável, sem dúvidas um excelente custo benefício, voltaria com toda certeza. 11/06/23</p>
              <div class="user">
                 <img src="images/pic-3.png" alt="">
                 <div class="user-info">
                    <h3>Thiago Zimmermann</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>“Adorei me hospedar em Natal! A localização é mais do que perfeita. Os funcionários são super atenciosos, o café da manhã é bom, o quarto é tamanho ideal, bem limpo e silencioso. Valeu super o custo x benefício! 19/06/21</p>
              <div class="user">
                 <img src="images/pic-4.png" alt="">
                 <div class="user-info">
                    <h3>Silmara Guimarães</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>Tudo ótimo. Funcionários todos gentis, café da manhã delicioso, ótima localização. Super recomendo! 18/05/21</p>
              <div class="user">
                 <img src="images/pic-5.png" alt="">
                 <div class="user-info">
                    <h3>Eduardo Jordão</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

           <div class="swiper-slide slide">
              <h2 class="heading">Avaliação de cliente</h2>
              <i class="fas fa-quote-right"></i>
              <p>Tv com muitos canais, pássaros cantando na janela, chuveiro incrível, café da manhã muito bom, cama confortável, funcionários muito atenciosos. Com elevador. 19/03/21</p>
              <div class="user">
                 <img src="images/pic-6.png" alt="">
                 <div class="user-info">
                    <h3>Beatriz Alencar</h3>
                    <div class="stars">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star-half-alt"></i>
                    </div>
                 </div>
              </div>
           </div>

        </div>
        <div class="swiper-pagination"></div>
     </div>

  </section>

  <!-- end -->

    <!-- footer -->

  <section class="footer">

     <div class="box-container">


           <div class="box">
           <h3>contatos</h3>
           <a href="#contato1"> <i class="fas fa-phone" id="contato1"></i> +55 (92) 3345-1232 </a>
           <a href="#contato2"> <i class="fas fa-phone" id="contato2"></i> +55 (92) 3345-1233</a>
           <a href="#ph"> <i class="fas fa-envelope" id="ph"></i> pandorahotel@gmail.com</a>
           <a href="https://encurtador.com.br/cjyEL"> <i class="fas fa-map"></i> Manaus, amazonas</a>
        </div>

        <div class="box">
           <h3>Opções</h3>
           <a href="#"> <i class="fas fa-arrow-right"></i> home</a>
           <a href="#sobre"> <i class="fas fa-arrow-right"></i> sobre</a>
           <a href="#quarto"> <i class="fas fa-arrow-right"></i> quartos</a>
           <a href="#hoteis"><i class="fas fa-arrow-right"></i>Hotéis</a>
           <a href="#galeria"> <i class="fas fa-arrow-right"></i> galeria</a>

        </div>

        <div class="box">
           <h3>Outros serviços</h3>
           <a href="#"> <i class="fas fa-arrow-right"></i> cadastrar parceiros</a>
           <a href="#"> <i class="fas fa-arrow-right"></i> area administrativa</a>
           <a href="https://pm.am.gov.br/portal/contato"> <i class="fas fa-arrow-right"></i> contato da segurança</a>
           <a href="https://encurtador.com.br/cvzR6"> <i class="fas fa-arrow-right"></i> contato dos bombeiros</a>
           <a href="https://encurtador.com.br/cjyEL"> <i class="fas fa-arrow-right"></i> Localização</a>
        </div>

     </div>

     <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
     </div>

     <div class="credit">&copy; Todos direitos reservados <span>Pandora hotel 2023.</span></div>

  </section>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

</body>
</html>