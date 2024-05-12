const dropArea = document.querySelector(".drag-area");
const dragText = dropArea.querySelector("header");
const button = dropArea.querySelector("#select-button");
const input = dropArea.querySelector("input");
const img = dropArea.querySelector(".profile-img")
let file;

button.onclick = () => {
    input.click();
}

input.addEventListener("change", function() {
    file = this.files[0];
    dropArea.classList.add("active");
    showFile();
});


dropArea.addEventListener("dragover", (event) => {
    event.preventDefault();
    dropArea.classList.add("active");
    dragText.textContent = "Release to Upload File";
});

dropArea.addEventListener("dragleave", () => {
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
});

dropArea.addEventListener("drop", (event) => {
    event.preventDefault();
    file = event.dataTransfer.files[0];
    showFile();
});

function showFile() {
    let fileType = file.type;
    let validExtensions = ["image/jpeg", "image/jpg", "image/png", "image/PNG"];

    if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
            let fileURL = fileReader.result;
            dropArea.querySelector('.upload-img').src = fileURL; 
            dropArea.classList.add("uploaded"); 
            dropArea.querySelector('.prof-user-img').style.display = 'none';

            // Call function to insert image into database
            insertImageToDatabase(fileURL);
        }        
        fileReader.readAsDataURL(file); 
    } else {
        alert("This is not an Image File!");
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
    }
}

function insertImageToDatabase(imageSrc) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "update_image.php", true); // This line sends a POST request to "update_image.php"
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send("profile_img=" + encodeURIComponent(imageSrc));
}


// --------------------------------------------------------------------------


document.addEventListener('DOMContentLoaded', () => {
    const friends = document.querySelector('#friends');
    const commentsPath = document.querySelector('#comments');
    const changedComments = document.querySelector('.comments');
    const showAllButton = document.getElementById('showAllComments');

    friends.addEventListener('click', () => {
        friends.style.textDecoration = 'underline';
        changedComments.style.display = 'none';
    });

    commentsPath.addEventListener('click', () => {
        friends.style.textDecoration = 'none';
        changedComments.style.textDecoration = 'underline';
        changedComments.style.display = 'block';
    });

    if(document.getElementById('showLessComments')){
        const showLessButton = document.getElementById('showLessComments');
        showLessButton.addEventListener('click', () => {
            fetchComments(3);
        });
    }

    showAllButton.addEventListener('click', () => {
        fetchComments();
    });

    function fetchComments(numComments = null) {
        let url = 'fetch_comments.php';
        if (numComments !== null) {
            url += `?num_comments=${numComments}`;
        }
        fetch(url)
            .then(response => response.text())
            .then(data => {
                changedComments.innerHTML = data;
            })
            .catch(error => {
                console.error('Error fetching comments:', error);
            });
    }
    
});

// --------------------------- change user -----------------------------------------------
 
document.addEventListener('DOMContentLoaded', function() {
    let changeUser = document.querySelector('.change');
    let changeContainer = document.querySelector('.changeContainer');

    changeUser.addEventListener('click', () => {
        if (changeContainer.style.display === 'block') {
            changeContainer.style.display = 'none';
        } else {
            changeContainer.style.display = 'block';
        }
    });
});

// --------------------------- change pass window -----------------------------------------------

document.addEventListener('DOMContentLoaded', () => {
    let changePassBtn = document.querySelector('.changepassbtn');

    changePassBtn.addEventListener('click', (event) => {
        event.preventDefault();
        
        document.querySelector('.changeContainer').style.display = 'none';
        
    });
});
