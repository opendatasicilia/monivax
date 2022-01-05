<!DOCTYPE html>
<html>
<title>Open Data Sicilia - MoniVAX</title>

<xmp theme="cerulean" style="display:none;">
# Monitora i vaccini della tua città

## Passo 1

Seleziona la tua città 

<form method="post" name="comune">
    <select name="istat">
        <option value="088001">Acate (RG)</option>
        <option value="087001">Aci Bonaccorsi (CT)</option>
        <option value="087002">Aci Castello (CT)</option>
        <option value="087003">Aci Catena (CT)</option>
        <option value="087005">Aci Sant'Antonio (CT)</option>
        <option value="087004">Acireale (CT)</option>
        <option value="085001">Acquaviva Platani (CL)</option>
        <option value="083107">Acquedolci (ME)</option>
        <option value="087006">Adrano (CT)</option>
        <option value="086001">Agira (EN)</option>
        <option value="084001">Agrigento (AG)</option>
        <option value="086002">Aidone (EN)</option>
        <option value="081001">Alcamo (TP)</option>
        <option value="083001">Alcara li Fusi (ME)</option>
        <option value="084002">Alessandria della Rocca (AG)</option>
        <option value="082001">Alia (PA)</option>
        <option value="082002">Alimena (PA)</option>
        <option value="082003">Aliminusa (PA)</option>
        <option value="082004">Altavilla Milicia (PA)</option>
        <option value="082005">Altofonte (PA)</option>
        <option value="083002">Alì (ME)</option>
        <option value="083003">Alì Terme (ME)</option>
        <option value="083004">Antillo (ME)</option>
        <option value="084003">Aragona (AG)</option>
        <option value="086003">Assoro (EN)</option>
        <option value="089001">Augusta (SR)</option>
        <option value="089002">Avola (SR)</option>
        <option value="082006">Bagheria (PA)</option>
        <option value="082007">Balestrate (PA)</option>
        <option value="083005">Barcellona Pozzo di Gotto (ME)</option>
        <option value="086004">Barrafranca (EN)</option>
        <option value="083006">Basicò (ME)</option>
        <option value="082008">Baucina (PA)</option>
        <option value="082009">Belmonte Mezzagno (PA)</option>
        <option value="087007">Belpasso (CT)</option>
        <option value="087008">Biancavilla (CT)</option>
        <option value="082010">Bisacquino (PA)</option>
        <option value="084004">Bivona (AG)</option>
        <option value="082082">Blufi (PA)</option>
        <option value="082011">Bolognetta (PA)</option>
        <option value="085002">Bompensiere (CL)</option>
        <option value="082012">Bompietro (PA)</option>
        <option value="082013">Borgetto (PA)</option>
        <option value="083007">Brolo (ME)</option>
        <option value="087009">Bronte (CT)</option>
        <option value="089003">Buccheri (SR)</option>
        <option value="084005">Burgio (AG)</option>
        <option value="089004">Buscemi (SR)</option>
        <option value="081002">Buseto Palizzolo (TP)</option>
        <option value="085003">Butera (CL)</option>
        <option value="082014">Caccamo (PA)</option>
        <option value="084006">Calamonaci (AG)</option>
        <option value="086005">Calascibetta (EN)</option>
        <option value="087010">Calatabiano (CT)</option>
        <option value="081003">Calatafimi-Segesta (TP)</option>
        <option value="084007">Caltabellotta (AG)</option>
        <option value="087011">Caltagirone (CT)</option>
        <option value="085004">Caltanissetta (CL)</option>
        <option value="082015">Caltavuturo (PA)</option>
        <option value="084008">Camastra (AG)</option>
        <option value="084009">Cammarata (AG)</option>
        <option value="084010">Campobello di Licata (AG)</option>
        <option value="081004">Campobello di Mazara (TP)</option>
        <option value="082016">Campofelice di Fitalia (PA)</option>
        <option value="082017">Campofelice di Roccella (PA)</option>
        <option value="082018">Campofiorito (PA)</option>
        <option value="085005">Campofranco (CL)</option>
        <option value="082019">Camporeale (PA)</option>
        <option value="087012">Camporotondo Etneo (CT)</option>
        <option value="089005">Canicattini Bagni (SR)</option>
        <option value="084011">Canicattì (AG)</option>
        <option value="082020">Capaci (PA)</option>
        <option value="083008">Capizzi (ME)</option>
        <option value="083009">Capo d'Orlando (ME)</option>
        <option value="083010">Capri Leone (ME)</option>
        <option value="082021">Carini (PA)</option>
        <option value="089006">Carlentini (SR)</option>
        <option value="083011">Caronia (ME)</option>
        <option value="083012">Casalvecchio Siculo (ME)</option>
        <option value="089007">Cassaro (SR)</option>
        <option value="087013">Castel di Iudica (CT)</option>
        <option value="083013">Castel di Lucio (ME)</option>
        <option value="082022">Castelbuono (PA)</option>
        <option value="082023">Casteldaccia (PA)</option>
        <option value="083014">Castell'Umberto (ME)</option>
        <option value="081005">Castellammare del Golfo (TP)</option>
        <option value="082024">Castellana Sicula (PA)</option>
        <option value="083015">Castelmola (ME)</option>
        <option value="084012">Casteltermini (AG)</option>
        <option value="081006">Castelvetrano (TP)</option>
        <option value="087014">Castiglione di Sicilia (CT)</option>
        <option value="084013">Castrofilippo (AG)</option>
        <option value="082025">Castronovo di Sicilia (PA)</option>
        <option value="083016">Castroreale (ME)</option>
        <option value="087015">Catania (CT)</option>
        <option value="086006">Catenanuova (EN)</option>
        <option value="084014">Cattolica Eraclea (AG)</option>
        <option value="082026">Cefalà Diana (PA)</option>
        <option value="082027">Cefalù (PA)</option>
        <option value="086007">Centuripe (EN)</option>
        <option value="086008">Cerami (EN)</option>
        <option value="082028">Cerda (PA)</option>
        <option value="083017">Cesarò (ME)</option>
        <option value="088002">Chiaramonte Gulfi (RG)</option>
        <option value="082029">Chiusa Sclafani (PA)</option>
        <option value="084015">Cianciana (AG)</option>
        <option value="082030">Ciminna (PA)</option>
        <option value="082031">Cinisi (PA)</option>
        <option value="082032">Collesano (PA)</option>
        <option value="088003">Comiso (RG)</option>
        <option value="084016">Comitini (AG)</option>
        <option value="083018">Condrò (ME)</option>
        <option value="082033">Contessa Entellina (PA)</option>
        <option value="082034">Corleone (PA)</option>
        <option value="081007">Custonaci (TP)</option>
        <option value="085006">Delia (CL)</option>
        <option value="086009">Enna (EN)</option>
        <option value="081008">Erice (TP)</option>
        <option value="083019">Falcone (ME)</option>
        <option value="084017">Favara (AG)</option>
        <option value="081009">Favignana (TP)</option>
        <option value="089008">Ferla (SR)</option>
        <option value="082035">Ficarazzi (PA)</option>
        <option value="083020">Ficarra (ME)</option>
        <option value="083021">Fiumedinisi (ME)</option>
        <option value="087016">Fiumefreddo di Sicilia (CT)</option>
        <option value="083022">Floresta (ME)</option>
        <option value="089009">Floridia (SR)</option>
        <option value="083023">Fondachelli-Fantina (ME)</option>
        <option value="083024">Forza d'Agrò (ME)</option>
        <option value="083025">Francavilla di Sicilia (ME)</option>
        <option value="089010">Francofonte (SR)</option>
        <option value="083026">Frazzanò (ME)</option>
        <option value="083027">Furci Siculo (ME)</option>
        <option value="083028">Furnari (ME)</option>
        <option value="083029">Gaggi (ME)</option>
        <option value="086010">Gagliano Castelferrato (EN)</option>
        <option value="083030">Galati Mamertino (ME)</option>
        <option value="083031">Gallodoro (ME)</option>
        <option value="082036">Gangi (PA)</option>
        <option value="085007">Gela (CL)</option>
        <option value="082037">Geraci Siculo (PA)</option>
        <option value="082038">Giardinello (PA)</option>
        <option value="083032">Giardini-Naxos (ME)</option>
        <option value="088004">Giarratana (RG)</option>
        <option value="087017">Giarre (CT)</option>
        <option value="081010">Gibellina (TP)</option>
        <option value="083033">Gioiosa Marea (ME)</option>
        <option value="082039">Giuliana (PA)</option>
        <option value="082040">Godrano (PA)</option>
        <option value="087018">Grammichele (CT)</option>
        <option value="083034">Graniti (ME)</option>
        <option value="082041">Gratteri (PA)</option>
        <option value="087019">Gravina di Catania (CT)</option>
        <option value="084018">Grotte (AG)</option>
        <option value="083035">Gualtieri Sicaminò (ME)</option>
        <option value="082042">Isnello (PA)</option>
        <option value="082043">Isola delle Femmine (PA)</option>
        <option value="088005">Ispica (RG)</option>
        <option value="083036">Itala (ME)</option>
        <option value="084019">Joppolo Giancaxio (AG)</option>
        <option value="084020">Lampedusa e Linosa (AG)</option>
        <option value="082044">Lascari (PA)</option>
        <option value="083037">Leni (ME)</option>
        <option value="089011">Lentini (SR)</option>
        <option value="086011">Leonforte (EN)</option>
        <option value="082045">Lercara Friddi (PA)</option>
        <option value="083038">Letojanni (ME)</option>
        <option value="083039">Librizzi (ME)</option>
        <option value="084021">Licata (AG)</option>
        <option value="087020">Licodia Eubea (CT)</option>
        <option value="083040">Limina (ME)</option>
        <option value="087021">Linguaglossa (CT)</option>
        <option value="083041">Lipari (ME)</option>
        <option value="083042">Longi (ME)</option>
        <option value="084022">Lucca Sicula (AG)</option>
        <option value="087022">Maletto (CT)</option>
        <option value="083043">Malfa (ME)</option>
        <option value="083044">Malvagna (ME)</option>
        <option value="083045">Mandanici (ME)</option>
        <option value="087057">Maniace (CT)</option>
        <option value="085008">Marianopoli (CL)</option>
        <option value="082046">Marineo (PA)</option>
        <option value="081011">Marsala (TP)</option>
        <option value="087023">Mascali (CT)</option>
        <option value="087024">Mascalucia (CT)</option>
        <option value="081012">Mazara del Vallo (TP)</option>
        <option value="085009">Mazzarino (CL)</option>
        <option value="087056">Mazzarrone (CT)</option>
        <option value="083046">Mazzarrà Sant'Andrea (ME)</option>
        <option value="089012">Melilli (SR)</option>
        <option value="084023">Menfi (AG)</option>
        <option value="083047">Merì (ME)</option>
        <option value="083048">Messina (ME)</option>
        <option value="082047">Mezzojuso (PA)</option>
        <option value="083049">Milazzo (ME)</option>
        <option value="085010">Milena (CL)</option>
        <option value="083050">Militello Rosmarino (ME)</option>
        <option value="087025">Militello in Val di Catania (CT)</option>
        <option value="087026">Milo (CT)</option>
        <option value="087027">Mineo (CT)</option>
        <option value="087028">Mirabella Imbaccari (CT)</option>
        <option value="083051">Mirto (ME)</option>
        <option value="081025">Misiliscemi (TP)</option>
        <option value="082048">Misilmeri (PA)</option>
        <option value="087029">Misterbianco (CT)</option>
        <option value="083052">Mistretta (ME)</option>
        <option value="088006">Modica (RG)</option>
        <option value="083053">Moio Alcantara (ME)</option>
        <option value="083054">Monforte San Giorgio (ME)</option>
        <option value="083055">Mongiuffi Melia (ME)</option>
        <option value="082049">Monreale (PA)</option>
        <option value="083056">Montagnareale (ME)</option>
        <option value="083057">Montalbano Elicona (ME)</option>
        <option value="084024">Montallegro (AG)</option>
        <option value="085011">Montedoro (CL)</option>
        <option value="082050">Montelepre (PA)</option>
        <option value="082051">Montemaggiore Belsito (PA)</option>
        <option value="088007">Monterosso Almo (RG)</option>
        <option value="084025">Montevago (AG)</option>
        <option value="083058">Motta Camastra (ME)</option>
        <option value="087030">Motta Sant'Anastasia (CT)</option>
        <option value="083059">Motta d'Affermo (ME)</option>
        <option value="085012">Mussomeli (CL)</option>
        <option value="084026">Naro (AG)</option>
        <option value="083060">Naso (ME)</option>
        <option value="087031">Nicolosi (CT)</option>
        <option value="086012">Nicosia (EN)</option>
        <option value="085013">Niscemi (CL)</option>
        <option value="086013">Nissoria (EN)</option>
        <option value="083061">Nizza di Sicilia (ME)</option>
        <option value="089013">Noto (SR)</option>
        <option value="083062">Novara di Sicilia (ME)</option>
        <option value="083063">Oliveri (ME)</option>
        <option value="083064">Pace del Mela (ME)</option>
        <option value="081013">Paceco (TP)</option>
        <option value="089014">Pachino (SR)</option>
        <option value="083065">Pagliara (ME)</option>
        <option value="087032">Palagonia (CT)</option>
        <option value="082052">Palazzo Adriano (PA)</option>
        <option value="089015">Palazzolo Acreide (SR)</option>
        <option value="082053">Palermo (PA)</option>
        <option value="084027">Palma di Montechiaro (AG)</option>
        <option value="081014">Pantelleria (TP)</option>
        <option value="081015">Partanna (TP)</option>
        <option value="082054">Partinico (PA)</option>
        <option value="087033">Paternò (CT)</option>
        <option value="083066">Patti (ME)</option>
        <option value="087034">Pedara (CT)</option>
        <option value="082055">Petralia Soprana (PA)</option>
        <option value="082056">Petralia Sottana (PA)</option>
        <option value="081024">Petrosino (TP)</option>
        <option value="083067">Pettineo (ME)</option>
        <option value="082057">Piana degli Albanesi (PA)</option>
        <option value="086014">Piazza Armerina (EN)</option>
        <option value="087035">Piedimonte Etneo (CT)</option>
        <option value="086015">Pietraperzia (EN)</option>
        <option value="083068">Piraino (ME)</option>
        <option value="081016">Poggioreale (TP)</option>
        <option value="082058">Polizzi Generosa (PA)</option>
        <option value="082059">Pollina (PA)</option>
        <option value="084028">Porto Empedocle (AG)</option>
        <option value="089020">Portopalo di Capo Passero (SR)</option>
        <option value="088008">Pozzallo (RG)</option>
        <option value="089021">Priolo Gargallo (SR)</option>
        <option value="082060">Prizzi (PA)</option>
        <option value="084029">Racalmuto (AG)</option>
        <option value="083069">Raccuja (ME)</option>
        <option value="087036">Raddusa (CT)</option>
        <option value="084030">Raffadali (AG)</option>
        <option value="087058">Ragalna (CT)</option>
        <option value="088009">Ragusa (RG)</option>
        <option value="087037">Ramacca (CT)</option>
        <option value="087038">Randazzo (CT)</option>
        <option value="084031">Ravanusa (AG)</option>
        <option value="084032">Realmonte (AG)</option>
        <option value="086016">Regalbuto (EN)</option>
        <option value="083070">Reitano (ME)</option>
        <option value="085014">Resuttano (CL)</option>
        <option value="084033">Ribera (AG)</option>
        <option value="085015">Riesi (CL)</option>
        <option value="087039">Riposto (CT)</option>
        <option value="083071">Roccafiorita (ME)</option>
        <option value="083072">Roccalumera (ME)</option>
        <option value="082061">Roccamena (PA)</option>
        <option value="082062">Roccapalumba (PA)</option>
        <option value="083073">Roccavaldina (ME)</option>
        <option value="083074">Roccella Valdemone (ME)</option>
        <option value="083075">Rodì Milici (ME)</option>
        <option value="083076">Rometta (ME)</option>
        <option value="089016">Rosolini (SR)</option>
        <option value="081017">Salaparuta (TP)</option>
        <option value="081018">Salemi (TP)</option>
        <option value="084034">Sambuca di Sicilia (AG)</option>
        <option value="084035">San Biagio Platani (AG)</option>
        <option value="085016">San Cataldo (CL)</option>
        <option value="082063">San Cipirello (PA)</option>
        <option value="087040">San Cono (CT)</option>
        <option value="083077">San Filippo del Mela (ME)</option>
        <option value="083078">San Fratello (ME)</option>
        <option value="084036">San Giovanni Gemini (AG)</option>
        <option value="087041">San Giovanni la Punta (CT)</option>
        <option value="082064">San Giuseppe Jato (PA)</option>
        <option value="087042">San Gregorio di Catania (CT)</option>
        <option value="083079">San Marco d'Alunzio (ME)</option>
        <option value="082065">San Mauro Castelverde (PA)</option>
        <option value="087043">San Michele di Ganzaria (CT)</option>
        <option value="083080">San Pier Niceto (ME)</option>
        <option value="083081">San Piero Patti (ME)</option>
        <option value="087044">San Pietro Clarenza (CT)</option>
        <option value="083082">San Salvatore di Fitalia (ME)</option>
        <option value="083090">San Teodoro (ME)</option>
        <option value="081020">San Vito Lo Capo (TP)</option>
        <option value="083084">Sant'Agata di Militello (ME)</option>
        <option value="087045">Sant'Agata li Battiati (CT)</option>
        <option value="083085">Sant'Alessio Siculo (ME)</option>
        <option value="087046">Sant'Alfio (CT)</option>
        <option value="084039">Sant'Angelo Muxaro (AG)</option>
        <option value="083088">Sant'Angelo di Brolo (ME)</option>
        <option value="085017">Santa Caterina Villarmosa (CL)</option>
        <option value="082066">Santa Cristina Gela (PA)</option>
        <option value="088010">Santa Croce Camerina (RG)</option>
        <option value="083083">Santa Domenica Vittoria (ME)</option>
        <option value="084037">Santa Elisabetta (AG)</option>
        <option value="082067">Santa Flavia (PA)</option>
        <option value="083086">Santa Lucia del Mela (ME)</option>
        <option value="084038">Santa Margherita di Belice (AG)</option>
        <option value="087047">Santa Maria di Licodia (CT)</option>
        <option value="083087">Santa Marina Salina (ME)</option>
        <option value="081019">Santa Ninfa (TP)</option>
        <option value="083089">Santa Teresa di Riva (ME)</option>
        <option value="087048">Santa Venerina (CT)</option>
        <option value="084040">Santo Stefano Quisquina (AG)</option>
        <option value="083091">Santo Stefano di Camastra (ME)</option>
        <option value="083092">Saponara (ME)</option>
        <option value="083093">Savoca (ME)</option>
        <option value="083094">Scaletta Zanclea (ME)</option>
        <option value="084041">Sciacca (AG)</option>
        <option value="082068">Sciara (PA)</option>
        <option value="088011">Scicli (RG)</option>
        <option value="082081">Scillato (PA)</option>
        <option value="082069">Sclafani Bagni (PA)</option>
        <option value="087049">Scordia (CT)</option>
        <option value="085018">Serradifalco (CL)</option>
        <option value="084042">Siculiana (AG)</option>
        <option value="083095">Sinagra (ME)</option>
        <option value="089017">Siracusa (SR)</option>
        <option value="089018">Solarino (SR)</option>
        <option value="085019">Sommatino (CL)</option>
        <option value="089019">Sortino (SR)</option>
        <option value="083096">Spadafora (ME)</option>
        <option value="086017">Sperlinga (EN)</option>
        <option value="085020">Sutera (CL)</option>
        <option value="083097">Taormina (ME)</option>
        <option value="083106">Terme Vigliatore (ME)</option>
        <option value="082070">Termini Imerese (PA)</option>
        <option value="082071">Terrasini (PA)</option>
        <option value="083098">Torregrotta (ME)</option>
        <option value="083108">Torrenova (ME)</option>
        <option value="082072">Torretta (PA)</option>
        <option value="083099">Tortorici (ME)</option>
        <option value="082073">Trabia (PA)</option>
        <option value="081021">Trapani (TP)</option>
        <option value="082074">Trappeto (PA)</option>
        <option value="087050">Trecastagni (CT)</option>
        <option value="087051">Tremestieri Etneo (CT)</option>
        <option value="083100">Tripi (ME)</option>
        <option value="086018">Troina (EN)</option>
        <option value="083101">Tusa (ME)</option>
        <option value="083102">Ucria (ME)</option>
        <option value="082075">Ustica (PA)</option>
        <option value="081022">Valderice (TP)</option>
        <option value="083103">Valdina (ME)</option>
        <option value="086019">Valguarnera Caropepe (EN)</option>
        <option value="082076">Valledolmo (PA)</option>
        <option value="085021">Vallelunga Pratameno (CL)</option>
        <option value="087052">Valverde (CT)</option>
        <option value="083104">Venetico (ME)</option>
        <option value="082077">Ventimiglia di Sicilia (PA)</option>
        <option value="087053">Viagrande (CT)</option>
        <option value="082078">Vicari (PA)</option>
        <option value="082079">Villabate (PA)</option>
        <option value="084043">Villafranca Sicula (AG)</option>
        <option value="083105">Villafranca Tirrena (ME)</option>
        <option value="082080">Villafrati (PA)</option>
        <option value="085022">Villalba (CL)</option>
        <option value="086020">Villarosa (EN)</option>
        <option value="081023">Vita (TP)</option>
        <option value="088012">Vittoria (RG)</option>
        <option value="087054">Vizzini (CT)</option>
        <option value="087055">Zafferana Etnea (CT)</option>
    </select>
    </br>
    Inserisci la lunghezza dell'immagine (<strong>in pixel</strong>)
    </br>
    <input type="text" id="width" value="200">
    </br>
    Inserisci l'altezza dell'immagine (<strong>in pixel</strong>)
    </br>
    <input type="text" id="height"  value="200">
    </br>
    Inserisci la dimensione del titolo (<strong>in pixel</strong>)
    </br>
    <input type="text" id="size_titolo" value="10">
    </br>
    </br>


    <button id="genera" name="genera">Genera immagine</button>
</form>   

## Passo 2

Genera l'immagine e copia il link inserendolo nel tuo sito Web

 <a id="chart_link" href="" target="_blank"></a>

 <div id="image"></div>

</xmp>

<script src="https://strapdownjs.com/v/0.2/strapdown.js"></script>
<script>

var url = document.location + 'chart.php?';

document.getElementById("genera").addEventListener("click", (event) => {
    event.preventDefault();
    if (document.contains(document.getElementById("image-chart"))) {
            document.getElementById("image-chart").remove();
    }
    const selectElement = document.querySelector('select');
    var comune = selectElement.options[selectElement.selectedIndex].text;
    var istat = selectElement.options[selectElement.selectedIndex].value;
    var width =  document.getElementById('width').value;
    var height = document.getElementById('height').value;
    var sizeTitolo = document.getElementById('size_titolo').value;
    var chartLink =  document.getElementById('chart_link');
    var imageDiv =  document.getElementById('image');

    urlFull = url+"istat="+istat+"&width="+width+"&height="+height+"&size-title="+sizeTitolo;

    img = document.createElement('img');
    img.setAttribute("id", "image-chart");
    img.src = urlFull;
    
    chartLink.text = 'COPIA QUESTO LINK E INSERISCILO NEL TUO SITO COME IMMAGINE';
    chartLink.href=urlFull;
    imageDiv.appendChild(img);
});

</script>
</html>