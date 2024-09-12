{{-- Contact Section --}}
<section id="contact" class="contact-section my-5 pt-1 bg-white">
    <div class="container">
        <h2 class="mb-4 text-center">Get in Touch</h2>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('portfolio.sendMessage') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-custom">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
