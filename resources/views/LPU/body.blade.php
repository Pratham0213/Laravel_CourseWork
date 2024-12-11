<body>
    //provide a passage for the body
    <p>In the heart of the city, a bustling marketplace stretches out, filled with the sounds of laughter, clinking glasses, and the occasional rustle of bells. The market is a haven for locals and tourists alike, where people come together to buy, sell, and trade goods. Here, you'll find everything from fresh produce to rare books, from handmade crafts to handmade garments, and from local produce to imported goods.</p>
    //add a button to open a modal window
    <button onclick="openModal()">Open Modal Window</button>
    
    //include the modal window HTML code
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Welcome to the Market!</h2>
            <p>This is a simple modal window. Click the button above to open it.</p>
        </div>
    </div>
    
    <script>
        //function to open the modal window
        function openModal() {
            document.getElementById("modal").style.display = "block";
        }
        
        //function to close the modal window
        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }
        
        //add event listener to close button to automatically close the modal when clicked
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            closeModal();
        }
        
        //add event listener to close button to automatically close the modal when the user clicks outside of the modal window
        window.onclick = function(event) {
            if (event.target == document.getElementById("modal")) {
                closeModal();
            }
        }
    </script>
</body>