<h1>Simuler une prise de contact</h1>

<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="prenom">Prénom :</lafirstbel>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <!-- no de tél -->
      <label for="telephone">Téléphone:</label>
      <!-- <input type="tel" id="telephone" name="user_phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> -->
      <input type="tel" id="telephone" name="user_phone">
    </div>

    <div>
        <!-- liste déroulante pour sujet du message -->

        <label for="sujet-select">Choisir un sujet:</label>

        <select name="user_sujet" id="sujet-select">
            <option value="">-- Choisir un sujet --</option>
            <option value="Information">Information</option>
            <option value="Réclamation">Réclamation</option>
            <option value="Demande d'aide">Demande d'aide</option>
            <option value="Autre">Autre</option>
        </select>
    </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>