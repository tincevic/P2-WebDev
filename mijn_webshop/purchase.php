<?php
    $title = "Purchasing Prince - 1999 | The Wrecka Stow";
    $dir = "";
?>
<?php include "includes/header.php"; ?>
            <h2>Bestellen: Prince - 1999</h2>

            <form class="formulier">
            <div class="field">
                <label for="First name">First name:</label>
                <input type="text" id="First name" name="First name" placeholder="Prince Rogers" required>
            </div>
            <div class="field">
                <label for="Surname">Surname:</label>
                <input type="text" id="Surname" name="Surname" placeholder="Nelson" required>
            </div>
            <div class="field">
                <label for="E-mail">E-mail:</label>
                <input type="email" id="E-mail" name="E-mail" placeholder="prince@3121.com" required>
            </div>
            <div class="field">
                <label for="Amount">Amount:</label>
                <input type="number" id="Amount" name="Amount" placeholder="1" min="1" max="10"required>
            </div>
            <div class="Version">
                <label for="Version">Version:</label>
                <select id="Version" name="Version">
                    <option value="vinyl">Vinyl (Suzy Records)</option>
                    <option value="cd">CD</option>
                    <option value="digital">Digital</option>
                    <option value="vinyl-deluxe">Vinyl (Deluxe)</option>
                    <option value="cd-deluxe">CD (Deluxe)</option>
                    <option value="digital-deluxe">Digital (Deluxe)</option>
                </select>
            </div>
            <div class="field">
                <input type="checkbox" id="Terms" name="Terms" required>
                <label for="Terms">I agree to the terms and conditions</label>
            </div>
            <div class="field check">
                <input type="submit" value="Submit" class="button">
            </div>
            </form>
        </div> <!--end of content-->
<?php include "includes/footer.php"; ?>