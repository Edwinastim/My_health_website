//getting required elements
const wrapperS = document.querySelector(".search-input");
const inputB = wrapperS.querySelector("input");
const suggestB = wrapperS.querySelector(".autocom-box");
const icon = wrapperS.querySelector(".icon");
let linkTag = wrapperS.querySelector("a");
let webLink;

// When user is typing
inputB.onkeyup = (e)=>{
    let userD = e.target.value; //user enetered data
    let arrayH = [];//array place holder for data
    if(userD){
        
        arrayH = suggestions.filter((data)=>{
            //filter array values and return those words which start with user input
            //
            return data.toLocaleLowerCase().startsWith(userD.toLocaleLowerCase()); 
        });
        arrayH = arrayH.map((data)=>{
            // passing return data inside li tag
            return data = '<li>'+ data +'</li>';
        });
        wrapperS.classList.add("active"); //show autocomplete box
        showSuggestions(arrayH);
        let allList = suggestB.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        wrapperS.classList.remove("active"); //hides autocomplete box
    }
}

function select(element){
    let selectD = element.textContent;
    inputB.value = selectD;
    icon.onclick = ()=>{
        switch(inputB.value) {
                case 'Product1':
                        let pro_name = "1product"
                        $.ajax({
                            
                            url: "prdt.php",
                            method: "post",
                            data: {
                            query: pro_name,
                            }});
                break;
                case 'Product2':
                        webLink = "2Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product3':
                        webLink = "3Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product4':
                        webLink = "4Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product5':
                        webLink = "5Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product6':
                        webLink = "6Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product7':
                        webLink = "7Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product8':
                        webLink = "8Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product9':
                        webLink = "9Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product10':
                        webLink = "10Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product11':
                        webLink = "11Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product12':
                        webLink = "12Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product13':
                        webLink = "13Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product14':
                        webLink = "14Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product15':
                        webLink = "15Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product16':
                        webLink = "16Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product17':
                        webLink = "17Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                
                case 'Product18':
                        webLink = "18Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product19':
                        webLink = "19Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product20':
                        webLink = "20Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product21':
                        webLink = "21Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product22':
                        webLink = "22Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product23':
                        webLink = "23Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product23':
                        webLink = "23Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product24':
                        webLink = "24Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product25':
                        webLink = "25Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product26':
                        webLink = "26Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product27':
                        webLink = "27Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product28':
                        webLink = "28Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product29':
                        webLink = "29Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                case 'Product30':
                        webLink = "30Product.html";
                        linkTag.setAttribute("href", webLink);
                        linkTag.click();
                break;
                
                default:
                break;
          }
    }
    
    wrapperS.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputB.value;
        listData = '<li>'+ userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggestB.innerHTML = listData;
}
