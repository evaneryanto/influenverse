<div class="center-content">
            <div class="white-background">
                <img src="folder_icon.png" alt="Folder Icon" style="width: 250px; margin-bottom: 20px;">
                <h3>Create your new project</h3>
                <p>Fortunately, it's easy to create new one.</p>
                <button class="new-project-button" onclick="openPopup()">+ New Project</button>
            </div>
        </div>
    </div>
<div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Add New Project</h2>
            <hr>
            <h1><i class="fa-solid fa-receipt"></i> General Information</h1>
            <div class="form-left">
                <label for="projectName">Project Name</label><br>
                <input type="text" id="projectName" name="projectName" placeholder="Your Project Name Here"><br><br>
                <label for="uploadBrief">Upload Brief</label><br>
                <input type="file" id="uploadBrief" name="uploadBrief"><br><br>
                <label for="startDate">Start Date</label><br>
                <input type="date" id="startDate" name="startDate"><br><br>
                <label for="endDate">End Date</label><br>
                <input type="date" id="endDate" name="endDate"><br><br>
            </div>
            <div class="form-right">
                <div class="upload-section">
                  <label for="fileInput" class="upload-link">
                    <i class="fa-solid fa-circle-arrow-up"></i><br>
                    Click to choose file
                  </label> <br>
                  <span>or drag and drop.</span>
                  <input type="file" id="fileInput" style="display: none;">
                  <div class="drop-area" id="dropArea"></div>
                </div>
            </div>              
            <h1><i class="fa-solid fa-user-plus"></i> Influencer Criteria</h1>
            <div class="form-criteria">
                <label for="inf-category">Category</label><br>
                <select id="inf-category" name="inf-category">
                    <option value="" disabled selected hidden>Category Here</option>
                    <option value="beauty">Beauty</option>
                    <option value="fashion">Fashion</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="sports">Sports</option>
                    <option value="tech">Tech</option>
                    <option value="home-decor">Home Decor</option>
                    <option value="food-travel">Food & Travel</option>
                    <option value="education">Education</option>
                </select><br><br>                    
                <label for="location">Location</label><br>
                <select id="location" name="location">
                    <option value="" disabled selected hidden>Select Location</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Bali">Bali</option>
                    <option value="Makassar">Makassar</option>
                </select><br><br>
            </div>
            <div class="form-right">
                <label for="gender">Gender</label><br>
                <select id="gender" name="gender">
                    <option value="" disabled selected hidden>Gender Here</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <label for="age">Age</label><br>
                <input type="text" id="age" name="age" placeholder="Your Age (19-45)"><br><br>
            </div>
            <h1><i class="fa-solid fa-sack-dollar"></i> Project Budget</h1>
            <div class="ProjectBudget">
                <label for="budget">Budget</label><br>
                <input type="text" id="budget" name="bdget" placeholder="Your Budget Here"><br><br>
            </div>
            <div class="form-right">
                <label for="platform">Platform</label><br>
                <select id="platform" name="platform">
                    <option value="" disabled selected hidden>Choose Platform Here</option>
                    <option value="instagram">Instagram</option>
                    <option value="tiktok">Tiktok</option>
                    <option value="youtube">YouTube</option>
                    <option value="others">Others</option>
                </select><br><br><br>
            </div>        
            <!-- Tambahkan tombol Cancel dan Next -->
            <div class="button-container">
                <button class="cancel-button" onclick="closePopup()">Cancel</button>
                <button class="next-button" onclick="nextStep()">Next</button>
            </div>        
        </div>
    </div>

    <head>
    <script>
//pop up menu 
function openPopup() {
    document.getElementById("popupContainer").style.display = "block";
}

function closePopup() {
    document.getElementById("popupContainer").style.display = "none";
}

document.getElementById("newProjectForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Handle form submission, e.g., send data to server or process it in JavaScript
    alert("Form submitted!");
    closePopup();
});

document.querySelector(".new-project-button").addEventListener("click", openPopup);

    </script>
</head>
