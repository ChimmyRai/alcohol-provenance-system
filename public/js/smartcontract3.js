

var modal="";

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
console.log(contract);
  // Get the current URL of the webpage
const currentUrl = window.location.href;
// alert(currentUrl);
// Extract parameters from the current URL
const urlParams = new URLSearchParams(currentUrl.split('?')[1]);

// Get specific parameters by their names
const variable1 = urlParams.get('bn');
const variable2 = urlParams.get('pn');
const variable3 = urlParams.get('ban');
const variable4 = urlParams.get('bon');

// Check if the parameters are present and process them
if (variable1 && variable2 && variable3 && variable4) {

  // callContractMethod(variable1,variable2,variable3,variable4);
  callContractMethod("82277747209","gfgfgfgf gf",10,100)
    
} else {
    // Parameters not found or incomplete, handle this case if necessary
    console.log('Parameters not found or incomplete.');
}




// function to call a getter method on the contract
async function callContractMethod(bn,pn,ban,bon){

  // alert(bn);
  // alert(pn);
  // alert(ban);
  // alert(bon);
    try {
      // Call a contract method
    
      const result = await contract.methods.getBottleDetails(bn,pn,ban,bon).call();
      
      console.log('Method result:', result);
      console.log("type:",typeof(result));
      modal=document.getElementById("alcoholInfoModal");
        

      document.getElementById("s1").innerHTML=bon;
      document.getElementById("s2").innerHTML=result.batchnumber;
      document.getElementById("s3").innerHTML=result.volume+"Ml";
      document.getElementById("s4").innerHTML=result.sku;
     // document.getElementById("s5").innerHTML="Unique ID:"+inputValue;
      document.getElementById("s6").innerHTML=result.product_details.productName;
      document.getElementById("s7").innerHTML=result.product_details.productVariety;
      document.getElementById("s8").innerHTML=result.product_details.productCategory;
      document.getElementById("s9").innerHTML=result.product_details.appearance;
      document.getElementById("s10").innerHTML=result.product_details.alcoholContent+"%";
      document.getElementById("s11").innerHTML=result.product_details.creation_date;
      document.getElementById("s12").innerHTML=result.product_details.created_by;
      document.getElementById("s13").innerHTML=result.ingredients.ingretype;
      document.getElementById("s14").innerHTML=result.ingredients.origin;
      document.getElementById("s15").innerHTML=result.ingredients.yeast;
      document.getElementById("s16").innerHTML=result.ingredients.notes;
      document.getElementById("s17").innerHTML=result.distillation.process;
      document.getElementById("s18").innerHTML=result.distillation.stilldetails;
      document.getElementById("s19").innerHTML=result.distillation.caskType;
      document.getElementById("s20").innerHTML=result.distillation.charLevel;
      document.getElementById("s21").innerHTML=result.distillation.caskNumber;
      document.getElementById("s22").innerHTML=result.distillation.caskedDate;
      document.getElementById("s23").innerHTML=result.distillation.distillerName;
      document.getElementById("s24").innerHTML=result.distillation.barrelingDate;
      document.getElementById("s25").innerHTML=result.distillation.disorginDate;
      document.getElementById("s26").innerHTML=result.taste.Nose;
      document.getElementById("s27").innerHTML=result.taste.Palate;
      document.getElementById("s28").innerHTML=result.taste.Finish;
      document.getElementById("s29").innerHTML=result.supplier.supplierBusinessName;
      document.getElementById("s30").innerHTML=result.supplier.supplierBusinessNumber;
      document.getElementById("s31").innerHTML=result.supplier.supplierPhysicalAddress;
      modal=document.getElementById("alcoholInfoModal");
      openModal();
  
    } catch (error) {
      console.error('Error calling contract method:', error);
      modal=document.getElementById("inforetrievalErrModal");
      openModal();
    }
   }

   



   // Function to open the modal
function openModal() {
    modal.style.display ="block";
    
  }
  
  // Function to close the modal
  function closeModalFunction() {
    modal.style.display = "none";
  }
