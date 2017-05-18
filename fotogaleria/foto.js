// JavaScript Document
var p = `{
  "photos": [
      {
        "src": "san-francisco-wide.jpg",
        "title": "San Francisco",
        "description": "San Francisco je mesto v USA, súčasť oblasti San Francisco Bay Area. So svojimi takmer 800 000 obyvateľmi je 4. najväčšie a najľudnatejšie mesto v štáte Kalifornia a 14. najľudnatejšie mesto v Spojených štátoch. Radí sa medzi najhustejšie obývané mestá v USA. San Francisco je taktiež veľmi vyhľadávané turistami vďaka veľkému množstvu zaujímavostí a pamiatok."
      },
      {
        "src": "las-vegas-wide.jpg",
        "title": "Las Vegas",
        "description": "Las Vegas je najľudnatejšie mesto v Nevade, USA a administratívne sídlo Clark County. Považuje sa za svetové centrum herní a hazardu. Las Vegas založili v púšti v roku 1905 a v roku 1911 sa z neho stalo mesto."
      },
      {
        "src": "chicago-wide.jpg",
        "title": "Chicago",
        "description": "Chicago je najväčšie mesto v štáte Illinois a na Stredozápade a s viac ako 2,8 miliónmi obyvateľov, tretie najľudnatejšie mesto v Spojených štátoch. Chicago bolo založené v roku 1833, v blízkosti rozvodia medzi Veľkými jazerami a povodím rieky Mississippi. Na základe Zmluvy z Chicaga boli pôvodní obyvatelia, Potavatomíovia, násilne vysťahovaní. Mesto sa stalo významným dopravným a telekomunikačným uzlom v Severnej Amerike. V súčasnosti si mesto zachováva svoj status ako dôležitý priemyselný a dopravný uzol, s medzinárodným letiskom O'Hare ako druhým najväčším letiskom na svete. V roku 2008 mesto hostilo 45,6 milióna domácich a zahraničných návštevníkov."
      },
      {
        "src": "new-york-wide.jpg",
        "title": "New York",
        "description": "New York je najľudnatejšie mesto USA a jeho metropolitná oblasť patrí medzi najľudnatejšie na svete. Mesto bolo založené Holanďanmi v roku 1624 ako obchodné stredisko New Amsterdam a od roku 1790 je najväčším mestom Spojených štátov. New York bol tiež prvým hlavným mestom Spojených štátov po prijatí ústavy. V súčasnosti je jedným zo svetových centier obchodu a finančníctva. Má ročný hrubý domáci produkt približne 500 miliárd USD, čo by z neho pri pomyselnom porovnaní so štátmi sveta činilo šestnástu najväčšiu ekonomiku planéty. New York má aj globálny vplyv v oblasti médií, politiky, vzdelania, zábavy, umenia, módy a reklamy. Je aj ohniskom medzinárodných vzťahov a diplomacie, pretože sa tu nachádza sídlo OSN."
      },
      {
        "src": "boston-wide.jpg",
        "title": "Boston",
        "description": "Boston je hlavné a najväčšie mesto amerického štátu Massachusetts a najväčšie mesto Nového Anglicka. Je to námorný prístav na východnom pobreží USA. Leží pri zálive Massachusetts a ústí rieky Charles a Mystic do Atlantického oceánu. Počet obyvateľov je 617 594 (2010), metropolitná oblasť má 4 552 402 obyvateľov (2010)."
      },
      {
        "src": "atlanta-wide.jpg",
        "title": "Atlanta",
        "description": "Atlanta je hlavné a najväčšie mesto amerického štátu Georgia a centrálne mesto deviatej najväčšej metropolitnej oblasti v Spojených štátoch. Je sídlom Fulton County, hoci časť mesta zasahuje aj do DeKalb County. Podľa odhadu z roku 2005 tu žije 470-tisíc obyvateľov, čo je zhruba rovnaký počet ako v Bratislave, no v celej metropolitnej oblasti až 5,25 milióna, čo je porovnateľné s počtom obyvateľov celého Slovenska."
      }      
    ]
}` 
var obj = JSON.parse(p);

function openModal() {
  document.getElementById('Mod').style.display = "block";
}

function closeModal() {
  document.getElementById('Mod').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);
var timeout;

function plusSlides(n){
  showSlides(slideIndex += n);
}

function slideshow(){
  slideIndex++;
  timeout = setTimeout(slideshow, 2000);
  showSlides(slideIndex);  
}

function stopslideshow()
{
  clearTimeout(timeout);
}

function currentSlide(n){
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("slides");
  var captionText = document.getElementById("desc");
  
  if (n > slides.length){
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
 
  slides[slideIndex-1].style.display = "block";
  captionText.innerHTML = "<h2>" + obj.photos[slideIndex-1].title +"</h2><br>"+ obj.photos[slideIndex-1].description;
}

