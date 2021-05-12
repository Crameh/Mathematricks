const slider = document.querySelector(".slider");

    const leftArrow = document.querySelector(".left");
    const rightArrow = document.querySelector(".right");

    const Index0li = document.getElementById("Index0li");
    const Index1li = document.getElementById("Index1li");
    const Index2li = document.getElementById("Index2li");
    const Index3li = document.getElementById("Index3li");

    var sectionIndex = 0;

    Index0li.style.background = "white";

    function ChangeColor(index)
    {
        Index1li.style.background = "#333";
        Index2li.style.background = "#333";
        Index3li.style.background = "#333";
        Index0li.style.background = "#333";
        if(index == 0)
        {
            Index0li.style.background = "white";
        }
        else if (index == 1)
        {
            Index1li.style.background = "white";
        }
        else if (index == 2)
        {
            Index2li.style.background = "white";
        }
        else if (index == 3)
        {
            Index3li.style.background = "white";
        }
    }

    rightArrow.addEventListener("click", function(){
        if (sectionIndex == 0)
        {     
            sectionIndex++;
            slider.style.transform = "translate(-25%)";
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 1)
        {

            slider.style.transform = "translate(-50%)";
            sectionIndex++;
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 2)
        {

            slider.style.transform = "translate(-75%)";
            sectionIndex++;
            ChangeColor(sectionIndex);
        }
        else 
        {
            sectionIndex = 0;
            slider.style.transform = "translate(0%)";
            ChangeColor(sectionIndex);
        }
    });

    leftArrow.addEventListener("click", function(){
        if (sectionIndex == 0)
        {
            sectionIndex = 3
            slider.style.transform = "translate(-75%)";
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 1)
        {
            sectionIndex--;
            slider.style.transform = "translate(0%)";
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 2)
        {
            sectionIndex--;
            slider.style.transform = "translate(-25%)";
            ChangeColor(sectionIndex);
        }
        else 
        {
            sectionIndex--;
            slider.style.transform = "translate(-50%)";
            ChangeColor(sectionIndex);
        }
    });

    Index0li.addEventListener("click", function(){ sectionIndex = 0; slider.style.transform = "translate(0%)"; ChangeColor(sectionIndex);});
    Index1li.addEventListener("click", function(){ sectionIndex = 1; slider.style.transform = "translate(-25%)"; ChangeColor(sectionIndex);});
    Index2li.addEventListener("click", function(){ sectionIndex = 2; slider.style.transform = "translate(-50%)"; ChangeColor(sectionIndex);});
    Index3li.addEventListener("click", function(){ sectionIndex = 3; slider.style.transform = "translate(-75%)"; ChangeColor(sectionIndex);});

    function carousel()
    {
        if (sectionIndex == 0)
        {     
            sectionIndex++;
            slider.style.transform = "translate(-25%)";
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 1)
        {

            slider.style.transform = "translate(-50%)";
            sectionIndex++;
            ChangeColor(sectionIndex);
        }
        else if (sectionIndex == 2)
        {

            slider.style.transform = "translate(-75%)";
            sectionIndex++;
            ChangeColor(sectionIndex);
        }
        else 
        {
            sectionIndex = 0;
            slider.style.transform = "translate(0%)";
            ChangeColor(sectionIndex);
        }
    }
    setInterval(carousel, 4000);

    