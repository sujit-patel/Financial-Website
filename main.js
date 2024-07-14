// signup page password check 

// function checkPassword() {
//     const repass = document.querySelector("#repass");
//     const pass = document.querySelector("#pass");
//     if (pass.value !== repass.value) {
//         alert("Passwords do not match!");
//         return false;
//     } else {
//         return true;
//     }
// };

const allblock = document.querySelectorAll("#team .profile .block");

allblock.forEach(function (block) {
    gsap.from(block, {
        scale: 0.1,
        scrollTrigger: {
            scroll: "body",
            trigger: block,
            start: "top 85%",
            end: "top 40%",
            // markers:true,
            scrub: 3,
        }
    })

});

// aside Menu setting 

const closeBtn = document.getElementById("close-menu");
const menuBtn = document.getElementById("menu-bar");
const aside = document.querySelector("aside");
const link = document.querySelectorAll("ul li");

closeBtn.addEventListener("click", () => {
    console.log(" CloseBtn Click..!");
    setTimeout(() => {
        aside.style.display = "none";
    }, 250);
});

menuBtn.addEventListener("click", () => {
    console.log("MenuBtn click");
    setTimeout(() => {
        aside.style.display = "block";
    }, 250);
});

link.forEach(Element => {
    Element.addEventListener("click", () => {
        setTimeout(() => {
            aside.style.display = "none";
        }, 250);
    });
});

