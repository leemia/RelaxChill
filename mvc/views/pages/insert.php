
<?php if (isset($data["result"])) { ?>
    <h2 style="text-align: center">
        <?php
        if ($data["result"] == true) {
            echo "Successfully added a new song!";
        } else
            echo "Adding new song failed!";
        ?>
    </h2>
<?php
} ?>
<form action="Admin/AddMusic" method="post">
<h1>ADD MUSIC</h1>
    <div class="form-group">
        <label>SongTitle</label>
        <input type="text" id="songtitle" placeholder ="Enter new song's name" name="songtitle" class="form-control" required>
    </div>
    <div class="form-group">
    <label>SongLink</label>
        <input type="text" id="songlink" placeholder ="Enter new song's link" name="songlink" class="form-control" required>
    </div>
    
    <div class="form-group">
    <label>Type</label>
        <input type="text" id="idtype" placeholder ="Enter new song's type" name="idtype" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Listens</label>
        <input type="text" id="listens" placeholder="0" name="listens" class="form-control" required>
    </div>
    <div class="form-group">
        <button name="submit" type="submit" class="btn btn-success">SAVE</button>
        <a href="Admin/MusicManage/10/1" class="btn btn-warning">BACK</a>
    </div>
</form>


