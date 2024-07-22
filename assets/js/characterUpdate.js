document.addEventListener('DOMContentLoaded', function () {
    let initialCharacter = {...getCharacterInfos()};
    let updatedCharacter = {...initialCharacter};

    addEventUpdateStats();



    // Add the click event to all + and - buttons and send the data-stat and the opration symbol to the updateStat function
    function addEventUpdateStats() {
        document.querySelectorAll('.statsChangeButton').forEach(btn => {
            btn.addEventListener("click", event => {
                event.preventDefault();
                updateStat(event.target.getAttribute("data-stat"), event.target.textContent);
            })
        })
    }
    
    // Update the stats on updateCharacter and update the DOM
    function updateStat(stat, operation) {
        switch(stat) {
            case "life":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.life = updatedCharacter.life + 10;
                    updatedCharacter.maxLife = updatedCharacter.maxLife + 10;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.life > initialCharacter.life){
                    updatedCharacter.life = updatedCharacter.life - 10;
                    updatedCharacter.maxLife = updatedCharacter.maxLife - 10;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#life').textContent = updatedCharacter.life;
                document.querySelector('#maxLife').textContent = updatedCharacter.maxLife;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
            case "strength":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.strength = updatedCharacter.strength + 1;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.strength > initialCharacter.strength){
                    updatedCharacter.strength = updatedCharacter.strength - 1;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#str').textContent = updatedCharacter.strength;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
            case "intell":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.intell = updatedCharacter.intell + 1;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.intell > initialCharacter.intell){
                    updatedCharacter.intell = updatedCharacter.intell - 1;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#int').textContent = updatedCharacter.intell;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
            case "defense":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.defense = updatedCharacter.defense + 1;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.defense > initialCharacter.defense){
                    updatedCharacter.defense = updatedCharacter.defense - 1;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#def').textContent = updatedCharacter.defense;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
            case "barrier":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.barrier = updatedCharacter.barrier + 1;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.barrier > initialCharacter.barrier){
                    updatedCharacter.barrier = updatedCharacter.barrier - 1;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#bar').textContent = updatedCharacter.barrier;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
            case "speed":
                if (operation == "+" && updatedCharacter.statsPoints > 0){
                    updatedCharacter.speed = updatedCharacter.speed + 1;
                    updatedCharacter.statsPoints--;
                } else if (operation == "-" && updatedCharacter.speed > initialCharacter.speed){
                    updatedCharacter.speed = updatedCharacter.speed - 1;
                    if(updatedCharacter.statsPoints == 0) {
                        hideSaveButton();
                    }
                    updatedCharacter.statsPoints++;
                };
                document.querySelector('#spe').textContent = updatedCharacter.speed;
                document.querySelector('#poi').textContent = updatedCharacter.statsPoints;
                break;
        }
        if (updatedCharacter.statsPoints == 0) {
            showSaveButton();
        }
    }

    // display the save button when all points distrubuted
    function showSaveButton() {
        let saveDiv = document.querySelector('#saveDiv');
        saveDiv.style.display = "block";
        document.querySelector("#saveButton").addEventListener("click", event => {
            event.preventDefault();
            console.log('saving');
            let characterToSave = getCharacterInfos();

            // Async request 
            // TODO :: CORRECT THE URL WITHOUT THE FOLDER NAME WHEN DEPLOY
            fetch(`/Game - POO/assets/ajax/characterSave.php`, {
                method: 'POST',
                headers: { 'Content-type': 'application/json' },
                body: JSON.stringify(characterToSave),
            })
            .then(response => response.json())
            .then(responseData => {
                if (responseData.status === 'success') {
                    // définir l'action à réaliser
                    console.log('save done');
                } else {
                    alert("Failed to save Character data.");
                }
            })
            .catch(error => console.error('Error: ', error));


            //
            // try catch vers fichier php ajax A FINIR
            //




        });
    }

    // hide the save button when points removed
    function hideSaveButton() {
        let saveDiv = document.querySelector('#saveDiv');
        saveDiv.style.display = "none";
        document.querySelector("#saveButton").removeEventListener("click", event => {
            event.preventDefault();
        });
    }

    // return all the initial Character stats before any update
    function getCharacterInfos() {
        let newCharacterInfos = new Object();
        newCharacterInfos.type = parseInt(document.querySelector('#type').value);
        newCharacterInfos.type = parseInt(document.querySelector('#level').value);
        newCharacterInfos.life = parseInt(document.querySelector('#life').textContent);
        newCharacterInfos.maxLife = parseInt(document.querySelector('#maxLife').textContent);
        newCharacterInfos.strength = parseInt(document.querySelector('#str').textContent);
        newCharacterInfos.intell = parseInt(document.querySelector('#int').textContent);
        newCharacterInfos.defense = parseInt(document.querySelector('#def').textContent);
        newCharacterInfos.barrier = parseInt(document.querySelector('#bar').textContent);
        newCharacterInfos.speed = parseInt(document.querySelector('#spe').textContent);
        newCharacterInfos.statsPoints = parseInt(document.querySelector('#poi').textContent);
        return newCharacterInfos;
    }
    



});
