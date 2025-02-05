<section class="contact-container">

    <div class="contact-content">
        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Pošaljite nam poruku</h2>
            <form action="process_form.php" method="POST">
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
                src="https://www.google.com/maps/embed/v1/place?q=krapina&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" 
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
