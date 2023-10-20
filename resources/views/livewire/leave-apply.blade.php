
    <style>
        /* Your custom styles here */
        .file-label:hover {
            color: #1E90FF;
        }
        .file-label {
            color: #778899;
        }
        .custom-dropdown {
            position: relative;
            display: inline-block;
            width: 200px;
        }
        .custom-dropdown-label {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-dropdown-label-text {
            flex-grow: 1;
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }

        .custom-dropdown-arrow {
            margin-left: 10px;
            transition: transform 0.3s;
        }
        .custom-dropdown.open .custom-dropdown-arrow {
            transform: rotate(180deg);
        }

        .custom-dropdown-search {
            position: absolute;
            top: 45%;
            left: 20;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            list-style: none;
            padding: 0;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
        }
        .custom-dropdown .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: none;
            border-bottom: 1px solid #ccc; /* Add a bottom border to make it look like an input field */
        }
        .custom-dropdown.open .custom-dropdown-search {
            display: block;
        }

        .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .added-email {
        border: 2px solid #778899; /* Background color of the elliptical container */
        color: #778899; /* Text color */
        border-radius: 50%; /* Make it circular */
        width: 2rem; /* Adjust the width to make it elliptical */
        height: 2rem; /* Adjust the height to make it elliptical */
        display: flex;
        text-transform: uppercase;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden; /* Hide overflow if the email is too long */
        white-space: nowrap; /* Prevent text from wrapping */
    }
    
    .links {
    font-size: 13px;
    line-height: 2;
    font-family: 'Open Sans', sans-serif;
    text-decoration: none;
    cursor: pointer;
    font-weight:600; 
    color: #778899;
    transition: color 0.3s;

    }
    .links:hover {
    color: blue;
    text-decoration:none;

    }
    .card{
        width: 30%; height:45%;  background:transparent; padding:10px; border:none;
    }
    .active-link {
    font-size: 14px;
    color: blue;
    }
    .wrap-content{
        display:flex; background:transparent; width:100%; flex-direction:row; margin-top:30px;
    }
    .buttons1{
            display: flex; 
            justify-content: center; 
            gap: 10px; 
            margin-top:20px;
            font-weight:500;
            margin-bottom:10px;
        }
        .buttons1 .btn-secondary{
            background: #fff; 
            font-weight: 500; 
            color: #1E90FF;
             border: 1px solid #1E90FF;
        }
        .applyContainer{
            border: 1px solid #DCDCDC;
             border-radius: 10px;
              box-shadow: 1px 2px 2px 2px #F5F5F5; 
              width: 100%; 
              margin: 10px auto; 
              background: #FFFFFF;
              padding:10px 15px;
        }
    .reporting{
        display:flex; 
        flex-direction:row; 
        justify-content: space-between;
        padding: 15px 12px 15px 12px;
        border-radius: 30px; 
        align-items:center;
        width: 180px; 
        height: 55px; 
    }
        .reporting:hover{

       border: 1px solid #ccc;
   }
   .searchContainer{
    background:#fff;
    border:1px solid #ccc;
    border-radius:3px;
    box-shadow: 2px 0 5px 0 #ccc;
    padding:12px 15px;
    width:30%;
    margin-top:15px;
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow-y: auto;

   }
   .ccContainer{
    background:#fff;
    border:1px solid #ccc;
    border-radius:3px;
    box-shadow: 2px 0 5px 0 #ccc;
    padding:12px 15px;
    width:30%;
    margin-top:15px;
    max-height: 100px; /* Adjust the maximum height as needed */
    overflow-y: auto;

   }
    .ellipsis {
        font-size:0.875rem;
        margin-top:15px;
         font-weight:500;
         white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 70px; /* Adjust the value based on your container width */
        display: inline-block;
    }
    .reporting:hover .details {
        display: block;
    }
    .reporting.active {
    background-color: #D9ECFF;
    border:1px solid #ccc; /* Light blue color */
    /* Add any other styles you want for the active state */
}
.icon-container.active{
    background-color: #D9ECFF;
}
.icon-container{
    height: 2rem;
     width: 2rem;
    background: #fff; 
    padding: 7px; 
    border: 1px solid #778899; 
    border-radius: 50%; 
    display: flex; 
    justify-content: center; 
    align-items: center;
}
    .details {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        z-index: 1;
        width:100px;
        margin-top: -150px; /* Adjust the value to position it above the reporting container */
        margin-left: 50px;
        transform: translateX(-50%);
    }
    .cc-Container{
        height: 2rem;
        width: 2rem;
        background: #fff;
        padding: 7px; 
        border: 1px solid #778899;
        border-radius: 50%; 
        display: flex; 
        justify-content: center; 
        align-items: center;
    }
        @media screen and (max-width: 1060px) {
        /* Apply styles for screens 960px or less in width */
        .wrap-content {
            flex-direction: column;
            align-items: start;
        }
        .wrap-content > .card {
            width: 100%; /* Adjust the width for smaller screens */
        }
        .container  {
            width: 100%; /* Adjust the width for smaller screens */
        }
     }
    </style>

        <div class="wrap-content" >
        <div class="card" id="cardElement" >
            <div>
                <a onclick="toggleDetails('leave')" class="links">Leave</a>
            </div>
            <div>
                <a onclick="toggleDetails('restricted-content')" class="links">Restricted Holiday</a>
            </div>
            <div>
                <a onclick="toggleDetails('leaveCancel-content')" class="links">Leave Cancel</a>
            </div>
            <div>
                <a onclick="toggleDetails('compOff-content')" class="links">Comp Off Grant</a>
            </div>
        </div>

        <!-- Content for "Restricted Holiday" -->
        <div class="col" id="restricted-content" style="border-radius: 5px; display: none; width: 65%; background: pink; padding: 10px; ">
            <div>@livewire('leave-pending')</div>
        </div>

        <!-- Content for "Leave Cancel" -->
        <div class="col" id="leaveCancel-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">
            Leave Cancel Content
        </div>

        <!-- Content for "Comp Off Grant" -->
        <div class="col" id="compOff-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">
            Comp Off Grant Content
        </div>


   
         </div>
         
    <script>
         function toggleSearchBar() {
            const searchBar = document.getElementById('searchBar');
            const applyingToText = document.getElementById('applyingToText');
            const applyingToInput = document.getElementById('applyingToInput');

            if (searchBar.style.display === 'none' || searchBar.style.display === '') {
                // Open the search bar
                searchBar.style.display = 'block';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            } else {
                // Close the search bar
                searchBar.style.display = 'none';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            }
        }
          
        function toggleCCField() {
    const ccField = document.getElementById('ccField');
    const ccPlaceholder = document.getElementById('ccPlaceholder');

        // Toggle the display of the search container
        ccContainer.style.display = ccContainer.style.display === 'none' ? 'block' : 'none';
        if (ccContainer.style.display === 'block') {
            iconContainer.classList.add('active');
    } else {
        iconContainer.classList.remove('active');
    }
    }
    function addEmail(fullName) {
    const addedEmails = document.getElementById('addedEmails');

    // Get the entered email address
    const email = emailInput.value;

    if (email.trim() !== '') {
        // Create a new element to display the added email address
        const emailElement = document.createElement('div');
        emailElement.textContent = email.substring(0, 2); // Display only the first two letters
        emailElement.className = 'added-email';
        emailElement.style.border = '2px solid #778899'; // You can style the circle here
        emailElement.style.color = '#778899'; // You can set text color
        emailElement.style.borderRadius = '70%';
         // Make it circular

        // Append the email element to the addedEmails container
        addedEmails.appendChild(emailElement);

        // Clear the input field
        emailInput.value = '';
        ccField.style.display = 'none'; 
    }
}
function toggleOptions(tabId) {
            const tabs = ['leave', 'restricted-content', 'leaveCancel-content', 'compOff-content'];

            tabs.forEach(tab => {
                const tabElement = document.getElementById(tab);
                if (tab === tabId) {
                    tabElement.style.display = 'block';
                } else {
                    tabElement.style.display = 'none';
                }
            });
        }

    </script>
@livewireScripts
</body>
</html>