
    <style>
       
        .accordion {
            border: 0.0625rem solid #ccc;
            margin-bottom: 0.625rem;
            width:90%;
            margin:0 auto;
        }
      

        .accordion-heading {
            background-color: #fff;
            padding: 0.625rem;
            cursor: pointer;
        }

        .accordion-body {
            display: none;
            background-color: #fff;
            padding: 0.625rem;
        }

        .accordion-content {
            display: flex;
            flex-direction:column;
            justify-content: space-between;
            align-items: center;
        }
        .content {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .active .container {
            border-color: #3a9efd; /* Blue border when active */
        }
       .accordion-button{
        color:#DCDCDC;
        border: 0.0625rem solid #DCDCDC;
       }

        .active .accordion-button {
            color: #3a9efd;
            border: 0.0625rem solid #3a9efd;
         /* Blue arrow when active */
        }
    </style>

  
<div class="container mt-4">
        <div class="accordion">
            <div class="accordion-heading" onclick="toggleAccordion(this)">
                <div class="accordion-title">
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>
                    </div>
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Casual Leave Probation</span>
                    </div>
                    <div class="accordion-content">
                        <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>
                        <span style="color: #36454F; font-size: 1rem; font-weight: 500;">1</span>
                    </div>
                    
                    <div class="accordion-content">
                        <span style="margin-top:0.625rem;   font-size: 1rem; font-weight: 400;color:#32CD32;">APPROVED</span>
                    </div>
                    <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">
                   <!-- Down arrow character -->
                    </div>

                </div>
            </div>
            <div class="accordion-body">
                <hr>
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>
                    <span style=" font-size: 0.8125rem; "><span style=" font-size: 0.8125rem; font-weight: 500;">22 Aug 2023</span> (Session 1) to <span style=" font-size: 0.8125rem; font-weight: 500;">22 Aug 2023</span> (Session 2)</span>
                </div>
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>
                    <span style=" font-size: 0.8125rem; ">
Hi Sir, I would like to inform you that I require a 2 days of absence on 31/08/2023 to 01/09/2023. I need to go my home...</span>
                </div>
                <hr>
                <div style="display:flex; flex-direction:row; justify-content:space-between;">
                <div class="content">
                    <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>
                    <span style="color: #333; font-size: 1rem; font-weight: 500;">22 Aug, 2023</span>
                </div>
                <div class="content">
                   <a href="/view-details"> <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span></a>
                </div>
                </div>
            </div>
        </div>
    </div>

   

    <script>
        function toggleAccordion(element) {
            const accordionBody = element.nextElementSibling;
            if (accordionBody.style.display === 'block') {
                accordionBody.style.display = 'none';
                element.classList.remove('active'); // Remove active class
            } else {
                accordionBody.style.display = 'block';
                element.classList.add('active'); // Add active class
            }
        }
    </script>
