

    <!-- Contact Form Begin -->

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>

            <form action="{{route('contact.form.store')}}" method="POST">
                @csrf


                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                  @endif

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="email" value="{{old('email')}}" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message" name="message">{{old('message')}}</textarea>
                        <button type="submit" class="btn btn-info" style="color: black">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
