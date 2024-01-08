var modal="";

// Initialize a connection to your local Ganache node
const web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
const contractAddress = '0x47fEd95ec5EBf8dE262540Fee4A6faD37b7D3DE7';
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


// function to call a getter method on the contract
async function callContractMethod(inputValue){

  
    try {
      // Call a contract method
     
      const result = await contract.methods.getBottleDetails(inputValue).call();
      
      console.log('Method result:', result);
      console.log("type:",typeof(result));
      modal=document.getElementById("alcoholInfoModal");
        

      document.getElementById("s1").innerHTML="stock keeping unit:"+result.sku;
      document.getElementById("s2").innerHTML="Volume:"+result.volume+"Ml";
      document.getElementById("s3").innerHTML="Bottle Number:"+result.bottle_number;
      document.getElementById("s4").innerHTML="Number Of Bottles per Batch:"+result.Total_bottles_each_batch;
      document.getElementById("s5").innerHTML="Unique ID:"+inputValue;
      document.getElementById("s6").innerHTML="Product Name:"+result.product_details.productName;
      document.getElementById("s7").innerHTML="Variety:"+result.product_details.productVariety;
      document.getElementById("s8").innerHTML="Category:"+result.product_details.productCategory;
      document.getElementById("s9").innerHTML="Appearance:"+result.product_details.appearance;
      document.getElementById("s10").innerHTML="Alcohol Content:"+result.product_details.alcoholContent;
      document.getElementById("s11").innerHTML="Date of Creation:"+result.product_details.creation_date;
      document.getElementById("s12").innerHTML="Creator:"+result.product_details.created_by;
      document.getElementById("s13").innerHTML="Type:"+result.ingredients.ingretype;
      document.getElementById("s14").innerHTML="Origin:"+result.ingredients.origin;
      document.getElementById("s15").innerHTML="Yeast:"+result.ingredients.yeast;
      document.getElementById("s16").innerHTML="Notes:"+result.ingredients.notes;
      document.getElementById("s17").innerHTML="Process:"+result.distillation.process;
      document.getElementById("s18").innerHTML="Cask Type:"+result.distillation.caskType;
      document.getElementById("s19").innerHTML="Char Level:"+result.distillation.charLevel;
      document.getElementById("s20").innerHTML="Cask number:"+result.distillation.caskNumber;
      document.getElementById("s21").innerHTML="Casked Date:"+result.distillation.caskedDate;
      document.getElementById("s22").innerHTML="Distiller Name:"+result.distillation.distillerName;
      document.getElementById("s23").innerHTML="Barelling date:"+result.distillation.barrelingDate;
      document.getElementById("s24").innerHTML="Disorgin Date:"+result.distillation.disorginDate;
      document.getElementById("s25").innerHTML="Nose:"+result.taste.Nose;
      document.getElementById("s26").innerHTML="Palate:"+result.taste.Palate;
      document.getElementById("s27").innerHTML="Finish:"+result.taste.Finish;
      document.getElementById("s28").innerHTML="Business Name:"+result.supplier.supplierBusinessName;
      document.getElementById("s29").innerHTML="ABN:"+result.supplier.supplierBusinessNumber;
      document.getElementById("s30").innerHTML="Address:"+result.supplier.supplierPhysicalAddress;

    openModal();
  
    } catch (error) {
      console.error('Error calling contract method:', error);
      modal=document.getElementById("inforetrievalErrModal");
      openModal();
    }
   }

   function callGetMethodFromButton(){
    var inputValue = document.getElementById('bottleuid').value;
    callContractMethod(inputValue);

   }

   function callGetMethodFromScan(inputValue){
    
    callContractMethod(inputValue);

   }



   // Function to open the modal
function openModal() {
    modal.style.display = "block";
    
  }
  
  // Function to close the modal
  function closeModalFunction() {
    modal.style.display = "none";
  }

  //qrcode scanner code

  let scanCompleted = false;
  const qrCodeSuccessCallback = (decodedText, decodedResult) => {
    if (!scanCompleted) { // Check if scanning has already completed
      console.log(`Scan result: ${decodedText}`, decodedResult);
      console.log(decodedText);
      callGetMethodFromScan(parseInt(decodedText))
      scanCompleted = true; 
      // Set the flag to true to indicate scanning has completed
      html5Qrcode.clear(); // Clear the QR code scanner
      
    }
  }
  function startScanning() {
    
    const config = { fps: 10, qrbox: 250 };

    const html5QrCode = new Html5Qrcode("reader");
    html5QrCode.start({ facingMode: { exact: "user"} }, config, qrCodeSuccessCallback);


    
  }

  function stopScanning() {
    if (html5QrCode) {
      html5QrCode.clear(); // Clear the QR code scanner
      html5QrCode.stop().then(ignore => {
        // QR Code scanning is stopped. 
        console.log("QR Code scanning stopped.");
      }).catch(err => { 
        // Stop failed, handle it. 
        console.log("Unable to stop scanning.");
      });
    }
  }