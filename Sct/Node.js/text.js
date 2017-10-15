const fs = require('fs');

fs.writeFile('mijnBestand.txt','hallo wereld', () =>{
 console.log('gelukt');
    fs.readFile('mijnBestand.txt', (err,data)=>{
    
    });
})