<!-- note_detail -->
<ul class="list-group list-group-flush">
  <dl class="list-group-item">
    <h3><?php echo $note->note_name; ?></h3>
  </dl>
  <dl class="list-group-item">
    <dt>Date Created</dt>
    <dd><?php echo $note->note_time_stamp; ?></dd>
  </dl>
  <dl class="list-group-item">
    <dt>Note Description</dt>
    <dd><?php echo $note->note_description; ?></dd>
  </dl>
</ul><!-- end note_detail -->
