<section id="subintro">
  <div class="jumbotron subhead" id="overview">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="centered">
            <h3>Assignment & Task List</h3>
            <p>
              View all assignment/task from the database
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="maincontent">
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a href="<?= base_url('makelaarctl/newtask') ?>">New</a> </li>
      <li class=""><a href="<?= base_url('makelaarctl/onGoingTask') ?>">On Going</a> </li>
      <li class=""><a href="<?= base_url('makelaarctl/awaitingConfirmationTask') ?>">Awaiting Confirmation</a> </li>
      <li class=""><a href="<?= base_url('makelaarctl/completedTask') ?>">Completed</a> </li>
    </ul>
    <div class="row">
      <div class="span12">
      <style>
          tr>td:first-child {
            width: 10px
          }
          table{
            font-size: 13px;
          }
        </style>
        <table class="table table-hover table-striped">
          <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author(s)</th>
            <th>Date Added</th>
            <th>Added by Editor</th>
          </tr>
          <?php $i = 1;
          foreach ($tasks as $item) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $item['judul']; ?></td>
              <td><?= $item['keywords']; ?></td>
              <td><?= $item['date_created']; ?></td>
              <td><?= $item['nama'] ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</section>