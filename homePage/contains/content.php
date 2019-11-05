<section>
    <div class="container">
        <form>
            <div class="col1">
                <img id="hero" src="quote-hero.png" width="770" height="400">
                <h2>Motor Insurance</h2>
                <h5>Motor Quotes in Seconds From Our Preselected Insurer</h5>
            </div>

            <div class="col2">
                <div class="inputDiv">
                    <label id="label1" class="label" for="vehicleNum">Vehicle Number</label>
                    <input class="w3-input w3-border" type="text" name="vehicleNumber" pattern="^[a-z]\w{2}[0-9]\d{3}|[A-Z]\w{2}[0-9]\d{3}$" placeholder="JHRxxx" title="Please enter valid vehicle registration number" required>

                    <label id="label1" class="label" for="postcode">Postcode</label>
                    <input class="w3-input w3-border" type="text" name="postcode" pattern="^[0-9]{5}$" placeholder="your postcode" title="only input 5 digit number into the field" required>

                    <label id="label1" class="label" for="icNumber">Identification Card (IC)</label>
                    <input class="w3-input w3-border" type="text" name="icNum" pattern="^\d{6}\d{2}\d{4}$" placeholder="871010xxxxxx" title="Please enter a valid IC number" required>
                </div>

                <div class="buttonDiv">
                    <input type="submit" class="w3-bar-item w3-button w3-red" id="buyNow" style="color: #7e7e7e" value="Buy Now"></input>
                </div>
            </div>
        </form>
    </div>
</section>