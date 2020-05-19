<section id="subintro">
  <div class="jumbotron subhead" id="overview">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="centered">
            <h3>Task List</h3>
            <p>
              View all task from the database
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="maincontent">
  <div class="container">
    <div class="row">
      <div class="span12">
        <style>
          tr>td:first-child {
            width: 10px
          }
        </style>
        <table class="table table-hover table-striped">
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author(s)</th>
            <th>Page(s) Count</th>
            <th>Date Submitted</th>
            <th>Reviewer</th>
           
          </tr>
          <?php $i = 1;
          foreach ($tasks as $item) { ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $item['judul']; ?></td>
              <td><?= $item['authors']; ?></td>
              <td><?= $item['jumlah_hal']; ?></td>
              <td><?= $item['date_created']; ?></td>
              <td><?= $item['name']; ?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</section>