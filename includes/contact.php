<section class="resume-section" id="contact">
    <div class="resume-section-content">
        <div class="container">
            <h2 class="section-heading text-uppercase">Contact</h2>
            <h3 class="section-subheading text-muted">Send your information and we will respond as soon as possible</h3>
            <form id="contactForm" enctype="multipart/form-data" method="post">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" id="name_required" data-sb-feedback="name:required">Name required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" id="email_required" data-sb-feedback="email:required">Email required.</div>
                            <div class="invalid-feedback" id="email_invalid" data-sb-feedback="email:email">Invalid email.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Phone *" data-sb-validations="required" maxlength="12"/>
                            <div class="invalid-feedback" id="phone_required" data-sb-feedback="phone:required">Phone required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" id="message_required" data-sb-feedback="message:required">Message required.</div>
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
                <div class="text-center"><div class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send message</div></div>
            </form>
        </div>
    </div>
</section>
<hr class="m-0" />

