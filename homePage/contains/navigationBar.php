<div class="w3-bar">
    <img id="logo" onclick="myFunction()" src="logo.png" width="160" height="80">
    <div class="w3-right w3-mobile w3-padding" id="navBar">
        <a href="#Home" class="w3-bar-item w3-button" style="color: #7e7e7e">Home</a>              
        <a href="#About" class="w3-bar-item w3-button" style="color: #7e7e7e">About</a>
        <a href="#Claims" class="w3-bar-item w3-button" style="color: #7e7e7e">Claims</a>
        <a href="#HowItWorks" class="w3-bar-item w3-button" style="color: #7e7e7e">How It Works</a>            
        <button id="generateLink" type="button" class="w3-bar-item w3-button w3-red" style="color: #7e7e7e">Generate Link</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Link Generator</h2>
            </div>

            <div class="modal-body" id="generateNumber">
                <p id="generateNum"></p>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        location.reload();
    }

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("generateLink");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
        document.getElementById("generateNum").innerHTML = Math.random();
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            this.modal.style.display = "none";
        }
    }
</script>
