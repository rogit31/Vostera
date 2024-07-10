document.addEventListener('DOMContentLoaded', event => {
    const referencesData = articleData[0];
    const referencesMadeCount = articleData[1];
    const referencedCount = articleData[2];

    const referencePower = calcRefPower(referencesMadeCount, referencedCount);
    const fullData = appendRefPower(referencePower, referencesData);
    console.log('Full Data:', fullData);

    const sortedData = sortDataByRefPower(fullData);
    console.log('Sorted Data:', sortedData);

    draw(sortedData);
});

function calcRefPower(referencesMadeCount, referencedCount){
    const referencesMadeKeys = Object.keys(referencesMadeCount);
    const referencedKeys = Object.keys(referencedCount);
    const referencePower = {};

    referencesMadeKeys.forEach(key=> {
        referencePower[key] = (referencesMadeCount[key] || 0 ) + (referencedCount[key] || 0)
    })
    console.log(referencePower)
    return referencePower
}
function appendRefPower(referencePower, referencesData) {
    const fullData = { ...referencesData };

    Object.keys(referencePower).forEach(key => {
        if (fullData[key]) {
            fullData[key].referencePower = referencePower[key];
        } else {
            fullData[key] = { referencePower: referencePower[key] };
        }
    });

    console.log(fullData);
    return fullData;
}

function sortDataByRefPower(fullData) {
    const fullDataArray = [];

    for (let ref in fullData) {
        fullDataArray.push({ ref, ...fullData[ref] });
    }

    fullDataArray.sort((a, b) => b.referencePower - a.referencePower);

    return fullDataArray;
}


function draw(sortedData){
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext('2d');
    ctx.fillStyle = "white";
    ctx.fillRect(0,0,600,600);
    const centerX = 300;
    const centerY = 300;
    const distanceFactor = 140;
    ctx.beginPath();
    ctx.arc(-1,-1,10,0,Math.PI*2)
    ctx.fillStyle='red';
    ctx.fill();
    sortedData.forEach((pageRef, index)=>{
        let distanceToCenter = (1 / sortedData[index].referencePower) * distanceFactor;
        console.log(distanceToCenter);
        ctx.beginPath();
        ctx.arc(centerX + distanceToCenter,centerY + distanceToCenter,5,0,Math.PI * 2);
        ctx.fillStyle='black';
        ctx.fill();
    })
}