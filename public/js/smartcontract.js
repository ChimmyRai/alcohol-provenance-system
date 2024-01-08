
  //uncomment the staement below if web3 library is locally installen and not from cdn
  //const Web3 = require('web3');
  // Your contract's address on the Ethereum network
 

var accountInuse="";



//function to determine if metamask is installed or not
const isMetaMaskInstalled = () => {
  const { ethereum } = window;
  return Boolean(ethereum && ethereum.isMetaMask);
};

async function connectWallet() {
  return await ethereum.request({ method: "eth_requestAccounts" });
}
//funtion to display appropriate message after checking for metamask client
// Check if the user is connected to MetaMask
async function checkMetaMask() {
  try {
    if (!isMetaMaskInstalled()) {
      document.getElementById("errmsg").innerText = "You need to Install a Wallet. We recommend the MetaMask wallet extension for your browser.";
      const errdiv=document.getElementById('errorDiv');
          errdiv.style.opacity = 1; // Set opacity to 1 to trigger the fade-in effect
          errdiv.style.display = 'block'; // Display the div
      
          setTimeout(() => {
            errdiv.style.opacity = 0; // Set opacity to 0 to trigger the fade-out effect
      
            // After the transition duration, hide the div
            setTimeout(() => {
              errdiv.style.display = 'none';
            }, 2000); // Wait for the transition duration (500ms) before hiding the div
        }, 3000);
      return false;
    } else{

      connectWallet().then((accounts) => {
        if (accounts && accounts[0] > 0) {
          accountInuse=accounts[0];
          
          showAddress(accounts);
          return true;
        } else {
          
          document.getElementById("errmsg").innerText = "Connect your wallet";
         
          const errdiv=document.getElementById('errorDiv');
          errdiv.style.opacity = 1; // Set opacity to 1 to trigger the fade-in effect
          errdiv.style.display = 'block'; // Display the div
      
          setTimeout(() => {
            errdiv.style.opacity = 0; // Set opacity to 0 to trigger the fade-out effect
      
            // After the transition duration, hide the div
            setTimeout(() => {
              errdiv.style.display = 'none';
            }, 2000); // Wait for the transition duration (500ms) before hiding the div
        }, 3000);

          return false;
        }
      });

    }
    
  } catch (error) {
    console.error('Error connecting to MetaMask:', error);
    return false;
  }
}

let showAddress = (accounts) => {
  document.getElementById("infomsg").innerText = "Account:"+accounts[0];
  document.getElementById("informationDiv").style.display = "block";
  document.getElementById("buttonText").innerText ="connected";
    
};




// Initialize a connection to your local Ganache node
  const web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
  const contractAddress = '0x43a8176b6730A6a8131d46e8f51346Db9aB877Cd';
  const contractABI=[
    {
      "inputs": [
        {
          "internalType": "uint256",
          "name": "_startuid",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "_enduid",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "_batchnumber",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "_sku",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "_volume",
          "type": "uint256"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "productName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productVariety",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productCategory",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "appearance",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "alcoholContent",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "creation_date",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "created_by",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Product",
          "name": "_newProduct",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "ingretype",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "origin",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "yeast",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "notes",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Ingredients",
          "name": "_newIngredients",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "Nose",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Palate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Finish",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Taste",
          "name": "_taste",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "process",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "stilldetails",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "caskType",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "charLevel",
              "type": "string"
            },
            {
              "internalType": "uint256",
              "name": "caskNumber",
              "type": "uint256"
            },
            {
              "internalType": "string",
              "name": "caskedDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "distillerName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "barrelingDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "disorginDate",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Distillation",
          "name": "_newdistillation",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "supplierBusinessName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierBusinessNumber",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierPhysicalAddress",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Supplier",
          "name": "_supplier",
          "type": "tuple"
        }
      ],
      "name": "setProductInfo",
      "outputs": [],
      "stateMutability": "nonpayable",
      "type": "function"
    },
    {
      "anonymous": false,
      "inputs": [
        {
          "indexed": true,
          "internalType": "address",
          "name": "user",
          "type": "address"
        },
        {
          "indexed": false,
          "internalType": "uint256",
          "name": "start",
          "type": "uint256"
        },
        {
          "indexed": false,
          "internalType": "uint256",
          "name": "end",
          "type": "uint256"
        }
      ],
      "name": "SetterExecuted",
      "type": "event"
    },
    {
      "inputs": [
        {
          "internalType": "string",
          "name": "_supplierBusinessNumber",
          "type": "string"
        },
        {
          "internalType": "string",
          "name": "_productName",
          "type": "string"
        },
        {
          "internalType": "uint256",
          "name": "_batchNumber",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "_bottleNumber",
          "type": "uint256"
        }
      ],
      "name": "getBottleDetails",
      "outputs": [
        {
          "internalType": "uint256",
          "name": "sku",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "volume",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "batchnumber",
          "type": "uint256"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "productName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productVariety",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productCategory",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "appearance",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "alcoholContent",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "creation_date",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "created_by",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Product",
          "name": "product_details",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "ingretype",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "origin",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "yeast",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "notes",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Ingredients",
          "name": "ingredients",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "Nose",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Palate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Finish",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Taste",
          "name": "taste",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "process",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "stilldetails",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "caskType",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "charLevel",
              "type": "string"
            },
            {
              "internalType": "uint256",
              "name": "caskNumber",
              "type": "uint256"
            },
            {
              "internalType": "string",
              "name": "caskedDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "distillerName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "barrelingDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "disorginDate",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Distillation",
          "name": "distillation",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "supplierBusinessName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierBusinessNumber",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierPhysicalAddress",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Supplier",
          "name": "supplier",
          "type": "tuple"
        }
      ],
      "stateMutability": "view",
      "type": "function"
    },
    {
      "inputs": [
        {
          "internalType": "uint256",
          "name": "",
          "type": "uint256"
        }
      ],
      "name": "idToBottleInfo",
      "outputs": [
        {
          "internalType": "uint256",
          "name": "startuid",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "enduid",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "batchnumber",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "sku",
          "type": "uint256"
        },
        {
          "internalType": "uint256",
          "name": "volume",
          "type": "uint256"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "productName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productVariety",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "productCategory",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "appearance",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "alcoholContent",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "creation_date",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "created_by",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Product",
          "name": "product_details",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "ingretype",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "origin",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "yeast",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "notes",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Ingredients",
          "name": "ingredients",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "Nose",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Palate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "Finish",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Taste",
          "name": "taste",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "process",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "stilldetails",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "caskType",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "charLevel",
              "type": "string"
            },
            {
              "internalType": "uint256",
              "name": "caskNumber",
              "type": "uint256"
            },
            {
              "internalType": "string",
              "name": "caskedDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "distillerName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "barrelingDate",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "disorginDate",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Distillation",
          "name": "distillation",
          "type": "tuple"
        },
        {
          "components": [
            {
              "internalType": "string",
              "name": "supplierBusinessName",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierBusinessNumber",
              "type": "string"
            },
            {
              "internalType": "string",
              "name": "supplierPhysicalAddress",
              "type": "string"
            }
          ],
          "internalType": "struct AlcoholRegistry.Supplier",
          "name": "supplier",
          "type": "tuple"
        }
      ],
      "stateMutability": "view",
      "type": "function"
    }
  ];
  // Initialize a 'contract' instance 
  const contract = new web3.eth.Contract(contractABI, contractAddress);





// // Example function to send a transaction to the contract
async function sendTransaction() {
  if(accountInuse==""){
    alert("you havent connected to metamask");
  }
  
  
  try{
    
    alert(accountInuse);
  
    const s_uid = document.getElementById('start_uid').value;
    const Total_bottles_each_batch = document.getElementById('Total_bottles_each_batch').value;
    const e_uid = s_uid+Total_bottles_each_batch-1;
    const sku = document.getElementById('sku').value;
    const volume = document.getElementById('volume').value;
    const batchnumber = document.getElementById('batchNumber').value;
    const productName = document.getElementById('productName').value;
    const productVariety = document.getElementById('productVariety').value;
    const productCategory = document.getElementById('productCategory').value;
    const appearance = document.getElementById('appearance').value;
    const alcoholContent = document.getElementById('alcoholContent').value;
    const creation_date = document.getElementById('creation_date').value.toString();
    const created_by = document.getElementById('created_by').value;
    const ingretype = document.getElementById('ingretype').value;
    const origin = document.getElementById('origin').value;
    const yeast = document.getElementById('yeast').value;
    const notes = document.getElementById('notes').value;
    const Nose = document.getElementById('Nose').value;
    const Palate = document.getElementById('Palate').value;
    const Finish = document.getElementById('Finish').value;
    const process = document.getElementById('process').value;
    const stilldetial = document.getElementById('stilldetails').value;
    const caskType = document.getElementById('caskType').value;
    const charLevel = document.getElementById('charLevel').value;
    const caskNumber = document.getElementById('caskNumber').value;
    const caskedDate= document.getElementById('caskedDate').value.toString();
    const distillerName= document.getElementById('distillerName').value;
    const barrelingDate= document.getElementById('barrelingDate').value.toString();
    const disorginDate= document.getElementById('disorginDate').value.toString();
    const businessname= document.getElementById('supplierBusinessName').textContent;
    const businessnumber= document.getElementById('supplierBusinessNumber').textContent;
    const businessaddress= document.getElementById('supplierPhysicalAddress').textContent;
    
    alert(businessnumber);
    await contract.methods.setProductInfo(s_uid,e_uid,batchnumber,sku,volume,[productName,productVariety,productCategory,appearance,alcoholContent,creation_date,created_by],[ingretype,origin,yeast,notes],[Nose,Palate,Finish],[process,stilldetial,caskType,charLevel,caskNumber,caskedDate,distillerName,barrelingDate,disorginDate],
      [businessname,businessnumber,businessaddress]).send({from:accountInuse, gas: '2000000'});
    console.log('Transaction sent');
    document.getElementById('infomsg2').innerText = 'Your transaction has been sent';
    const infodiv=document.getElementById('transactionInfo');
    infodiv.style.opacity = 1; 
    infodiv.style.display = 'block';


    setTimeout(() => {
      infodiv.style.opacity = 0; // Set opacity to 0 to trigger the fade-out effect
      // After the transition duration, hide the div
      setTimeout(() => {
        infodiv.style.display = 'none';
      }, 2000); // Wait for the transition duration (500ms) before hiding the div
  }, 3000);
    scrolltotop();
  }catch (error) {
    console.error('Error sending transaction:', error);
    document.getElementById('errmsg2').innerText = 'Error sending transaction: '+error;
    const errdiv=document.getElementById('transactionErr');
    errdiv.style.opacity = 1; // Set opacity to 1 to trigger the fade-in effect
    errdiv.style.display = 'block'; // Display the div

    setTimeout(() => {
      errdiv.style.opacity = 0; // Set opacity to 0 to trigger the fade-out effect

      // After the transition duration, hide the div
      setTimeout(() => {
        errdiv.style.display = 'none';
      }, 2000); // Wait for the transition duration (500ms) before hiding the div
  }, 3000);
    
    scrolltotop();
  }

 
}

function scrolltotop(){

      window.scrollTo({
             top: 0,
             behavior: "smooth" 
                  });
            }


 


// // Add an event listener for 'SetterExecuted' event when the page loads
// document.addEventListener('DOMContentLoaded', () => {
//   var subscription = contract.events.setterExecuted({}, function(error, result){
//     if (!error) {
//         console.log('Event received:', result);
//         // You can access event data with result.returnValues
//         // For example: console.log('Event parameter:', result.returnValues.parameterName);
//     } else {
//         console.error('Error:', error);
//     }
// });
// });

// function handleBottleAddedEvent(event) {
//   const startuid = event.returnValues.start;
//   const enduid = event.returnValues.end;
  
//   // Update the UI with the latest start and end ids
//   const infomsg = document.getElementById('infomsg');
  
  
//   infomsg.textContent = `Start ID: ${startuid} End ID: ${enduid}`;
  
// }






