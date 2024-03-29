<?php include "header.php"; ?>
<div class="container mt-5">
    <h1>Create Movie</h1>
    <form action="/movie/new" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="release_year">Realise date</label>
            <input type="number"  min="1900" max="2099" id="release_year" name="release_year" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="format">Status:</label>
            <select id="format" name="format" class="form-control">
                <option value="VHS">VHS</option>
                <option value="DVD">DVD</option>
                <option value="Blu-ray">Blu-ray</option>
            </select>
        </div>
        <div id="actorsContainer">
        </div>
        <button type="button" class="btn btn-primary add-actor">Add Actor</button>
        <button type="submit" class="btn btn-success">Create Movie</button>
    </form>
</div>
<?php include "footer.php"; ?>
<script>
    $(document).ready(function() {
        let actorCounter = 0;

        $(document).on('click', '.add-actor', function() {
            const actorsContainer = $('#actorsContainer');
            const newActorGroup = $(
                `<div class="form-group actor-group" data-actor="${actorCounter}">` +
                `<label for="actor_text_${actorCounter}">Actor Text:</label>` +
                `<input type="text" name="actor_text[${actorCounter}]" class="form-control" id="actor_text_${actorCounter}" required>` +
                `<button type="button" class="btn btn-danger remove-actor ml-2">Remove Actor</button>` +
                `</div>`
            );
            actorsContainer.append(newActorGroup);
            actorCounter++;
        });

        $(document).on('click', '.remove-actor', function() {
            $(this).closest('.actor-group').remove();
        });
    });
</script>
