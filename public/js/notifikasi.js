function showCutscene(cutsceneId) {
  typing(cutsceneId);
  document.getElementById(cutsceneId).style.display = 'flex';
}

function showNextCutscene(nextCutsceneId) {
  const currentCutscene = document.querySelector('.cutscene-overlay[style*="display: flex"]');
  if (currentCutscene) {
    currentCutscene.style.display = 'none';
  }
  const nextCutscene = 'cutscene' + nextCutsceneId;
  typing(nextCutscene);
  document.getElementById(nextCutscene).style.display = 'flex';
}

function hideCutscene() {
  const currentCutscene = document.querySelector('.cutscene-overlay[style*="display: flex"]');
  if (currentCutscene) {
    currentCutscene.style.display = 'none';
  }
}

// Start the first cutscene on page load
document.addEventListener('DOMContentLoaded', function() {
  showCutscene('cutscene1');
});

// Typing animation
function typeWriter(element, text, speed, index = 0) {
  if (index < text.length) {
    element.innerHTML += text.charAt(index);
    setTimeout(() => typeWriter(element, text, speed, index + 1), speed);
  }
}

function typing(cutsceneId) {
  const typingElements = document.querySelectorAll(`#${cutsceneId} .typing-text`);
  typingElements.forEach(element => {
    element.innerHTML = ''; // Clear the text first
    const text = element.getAttribute('data-text');
    const speed = 20; // Adjust the speed as necessary
    typeWriter(element, text, speed);
  });
}

document.addEventListener("DOMContentLoaded", function() {
  // Check local storage for completed levels
  const completedLevels = JSON.parse(localStorage.getItem("completedLevels")) || {};

  // Map level buttons to their corresponding levels
  const levelButtons = {
    level1: document.getElementById("level1"),
    level2: document.getElementById("level2"),
    level3: document.getElementById("level3"),
    level4: document.getElementById("level4"),
  };

  // Enable or disable level buttons based on progress
  Object.keys(levelButtons).forEach((level, index) => {
    if (index === 0 || completedLevels[`level${index}`]) {
      levelButtons[level].classList.remove("disabled");
      levelButtons[level].href = `/${level.replace('level', 'Level')} awal`;
    } else {
      levelButtons[level].href = "#";
    }
  });

  // Handle the "Next" button click
  const nextButton = document.getElementById("nextButton");
  if (nextButton) {
    nextButton.addEventListener("click", function(event) {
      event.preventDefault();
      // Determine the current level from the page context, e.g., level2
      const currentLevel = "level2"; // Adjust this based on the actual context
      // Mark the current level as completed
      completedLevels[currentLevel] = true;
      localStorage.setItem("completedLevels", JSON.stringify(completedLevels));
      // Redirect to the next page
      window.location.href = nextButton.href;
    });
  }
});

// Function to mark a level as completed (for demonstration purposes)
function markLevelCompleted(level) {
  const completedLevels = JSON.parse(localStorage.getItem("completedLevels")) || {};
  completedLevels[level] = true;
  localStorage.setItem("completedLevels", JSON.stringify(completedLevels));
}

// Example: Mark level 1 as completed
// markLevelCompleted("level1");

document.getElementById('fullscreen-button').addEventListener('click', function() {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen().catch(err => {
      alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
    });
  } else {
    document.exitFullscreen();
  }
});

