// Function to validate the form
function validateForm() {
    const id = document.forms["studentForm"]["id"].value.trim();
    const lastname = document.forms["studentForm"]["lastname"].value.trim();
    const firstname = document.forms["studentForm"]["firstname"].value.trim();
    const gender = document.forms["studentForm"]["gender"].value;
    const course = document.forms["studentForm"]["course"].value;

    if (id === "" || lastname === "" || firstname === "" || gender === "" || course === "") {
        alert("All fields must be filled out!");
        return false; // Prevent form submission
    }

    // Show a confirmation message on successful validation
    alert("Form submitted successfully!");
    return true; // Allow form submission
}

// Change background color based on gender selection
function changeBackgroundColor() {
    const maleColor = "#B2D6F2";
    const femaleColor = "#FFD1DC";
    const othersColor = "#D4A5FF";
    
    const genderElements = document.querySelectorAll('input[name="gender"]');
    const container = document.querySelector('.container');
    
    // Find the selected gender
    let selectedGender = '';
    genderElements.forEach((element) => {
        if (element.checked) {
            selectedGender = element.value;
        }
    });

    // Change the background color based on the selected gender
    if (selectedGender === 'Male') {
        container.style.backgroundColor = maleColor;
    } else if (selectedGender === 'Female') {
        container.style.backgroundColor = femaleColor;
    } else if (selectedGender === 'Others') {
        container.style.backgroundColor = othersColor;
    }
}
