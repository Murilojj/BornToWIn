<?php
include 'header.php';
?>


        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contacte</span>
                            <h2 class="title">Entre em contacto comigo</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/conctact01.jpg" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Gabriel Júnior</h4>
                                <span>O Filho do Povo</span>
                            </div>
                            <div class="description">
                                <p>Se deseja entrar em contato comigo para discutir um projeto, fazer uma pergunta ou simplesmente dizer "olá", utilize o formulário nesta página. Prometo responder o mais rápido possível. 
                                </p>
                                <span class="phone">Phone: <a href="tel:01941043264">+01234567890</a></span>
                                <span class="mail">Email: <a href="mailto:admin@example.com">admin@example.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">Contacte-me</div>
                                <div class="social-icone">
                                    <a href="https://www.facebook.com/filhopovo" target="_blank"><i data-feather="facebook"></i></a>
                                    <a href="https://www.linkedin.com/in/gabriel-j%C3%BAnior-81457163/" target="_blank"><i data-feather="linkedin"></i></a>
                                    <a href="https://www.instagram.com/gabrieljuniorofficial/" target="_blank"><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">
                                <form class="rnt-contact-form rwt-dynamic-form row" id="contact-form" method="POST" action="mail.php">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-name">Seu Nome</label>
                                            <input class="form-control form-control-lg" name="contact-name" id="contact-name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="contact-phone">Contacto Telefónico</label>
                                            <input class="form-control" name="contact-phone" id="contact-phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-email">Email</label>
                                            <input class="form-control form-control-sm" id="contact-email" name="contact-email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Assunto</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="contact-message">Sua Mensagem</label>
                                            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>Envie a Mensagem</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>

   <?php
   include 'footer.php';
   ?>
</body>

</html>