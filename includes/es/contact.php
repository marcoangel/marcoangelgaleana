<section class="resume-section" id="contact">
    <div class="resume-section-content">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contacto</h2>
                <h3 class="section-subheading text-muted">Envía tu solicitud y te responderemos lo antes posible</h3>
            </div>
            <form id="contactForm" enctype="multipart/form-data" method="post">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                            <div class="invalid-feedback" id="name_required" data-sb-feedback="name:required">El nombre es obligatorio.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" id="email_required" data-sb-feedback="email:required">El correo es obligatorio.</div>
                            <div class="invalid-feedback" id="email_invalid" data-sb-feedback="email:email">El correo no es válido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" data-sb-validations="required" />
                            <div class="invalid-feedback" id="phone_required" data-sb-feedback="phone:required">El teléfono no es válido.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" id="message_required" data-sb-feedback="message:required">Se necesita el mensaje.</div>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Enviado correctamente !</div>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar mensaje !</div></div>
                <!-- Submit Button-->
                <div class="text-center"><div class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar</div></div>
            </form>
        </div>
    </div>
</section>
<hr class="m-0" />

