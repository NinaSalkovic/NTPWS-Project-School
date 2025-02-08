<section class="contact-container">

    <div class="contact-content">
        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Pošaljite nam poruku</h2>
            <form action="process_form" method="POST">
                <div class="form-group">
                    <label for="first-name">Ime:</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Prezime:</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail adresa:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Poruka:</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                </div>
                <button type="submit">Pošalji</button>
            </form>
        </div>

        <!-- Google Map -->
        <div class="map-container">
            <h2>Naša lokacija</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.0000000000005!2d15.8789!3d46.1608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6f6f6f6f6f6%3A0x6f6f6f6f6f6f6f6f!2sKrapina%2C%20Croatia!5e0!3m2!1sen!2shr!4v1610000000000!5m2!1sen!2shr" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
