<?php 
  $titre = "Contact";
  include 'header.php';
  include "navbar.php";
?>

      
      

  <!--faire la page Contact-->
  <form id="contact-form">
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" class="form-control" id="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom:</label>
          <input type="text" class="form-control" id="prenom" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
          <label for="sujet">Sujet:</label>
          <select class="form-control" id="sujet" required>
            <option disabled selected>Veuillez sélectionner un sujet</option>
            <option>Question générale</option>
            <option>Support technique</option>
            <option>Réclamation</option>
          </select>
        </div>
        <div class="form-group">
          <label for="question">Question:</label>
          <textarea class="form-control" id="question" rows="3" required></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="accepter" required>
          <label class="form-check-label" for="accepter">J'accepte le traitement de mes données</label>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
      </form>
    </div>
  </div>

  <!--Fin du Contact-->
  <div class="parallax-container">

      <div class="nav">
          <div class="video-container">
              <video autoplay muted loop style="width: 50%; height: 100%;">
                  <source src="video/pexels-rdne-stock-project-5780437-3840x2160-24fps.mp4" type="video/mp4">
              </video>
          </div>
      </div>
  </div>

  <?php include 'footer.php';
