<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Series</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="icon" sizes="128x128" href="data:image/png;base64,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">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <style>
    body {
      background-color: #f5f5f5;
    }
    header {
      background-image: url('../../image/header-image.jpg');
      background-size: cover;
      background-position: center;
      padding: 30px;
      text-align: center;
      color: #ffffff;
    }
    header h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    .center {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-top: 20px;
    }
    .no-info-img {
      max-width: 200px;
      margin-bottom: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .table th,
    .table td {
      text-align: center;
    }
    .actor-tag {
        display: inline-block;
        background-color: #e0e0e0;
        color: #333;
        padding: 5px 10px;
        border-radius: 5px;
        margin-right: 5px;
        margin-top: 5px;
    }
    .drag-drop-container {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
    .drag-drop-container h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    .row {
        display: flex;
        align-items: stretch;
    }
    .col {
        padding: 10px;
    }
    .list-group {
        background-color: #ffffff;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 10px;
        min-height: 200px;
    }
    .list-group-item {
        padding: 8px 12px;
        margin-bottom: 5px;
        border-radius: 5px;
        background-color: #e9ecef;
        border: none;
        transition: background-color 0.3s, border-radius 0.3s;
    }
    .list-group-item:last-child {
        margin-bottom: 0;
    }
    .list-group-item:hover,
    .list-group-item:focus,
    .list-group-item.active {
        background-color: #e9ecef;
        cursor: pointer;
        border-radius: 10px;
    }
    .bg-gray {
        background-color: #f8f9fa;
    }
  </style>
</head>
<body>
<header>
  <h1>Series</h1>
  <a href="/" id="goToHome" class="btn btn-primary">Go to Home</a>
  <button id="createSerieBtn" class="btn btn-primary">Create New Serie</button>
</header>
<div class="container">
  <br><br>
  <div id="serieList">
    <?php if (empty($series)): ?>
      <div class="center">
        <img src="../../image/no_data-image.jpg" alt="No information available" class="no-info-img">
        <p class="alert alert-info">No information available.</p>
      </div>
    <?php else: ?>
      <table id="serieTable" class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Platforms</th>
            <th>Actors</th>
            <th>Directors</th>
            <th>Audio</th>
            <th>Subtitle</th>
            <th>Created</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($series as $serie): ?>
            <tr>
              <td><?php echo $serie['id']; ?></td>
              <td><?php echo $serie['title']; ?></td>
              <td><?php echo $serie['description']; ?></td>
              <td>
                <?php if (isset($serie['series_platforms']) && is_array($serie['series_platforms'])): ?>
                  <?php foreach ($serie['series_platforms'] as $platforms): ?>
                    <span class="actor-tag"><?php echo $platforms['name']; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (isset($serie['series_actors']) && is_array($serie['series_actors'])): ?>
                  <?php foreach ($serie['series_actors'] as $actor): ?>
                    <span class="actor-tag"><?php echo $actor['name']; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (isset($serie['series_directors']) && is_array($serie['series_directors'])): ?>
                  <?php foreach ($serie['series_directors'] as $director): ?>
                    <span class="actor-tag"><?php echo $director['name']; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (isset($serie['series_audio_languages']) && is_array($serie['series_audio_languages'])): ?>
                  <?php foreach ($serie['series_audio_languages'] as $audio_languages): ?>
                    <span class="actor-tag"><?php echo $audio_languages['name']; ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if (isset($serie['series_subtitle_languages']) && is_array($serie['series_subtitle_languages'])): ?>
                  <?php foreach ($serie['series_subtitle_languages'] as $subtitle_languages): ?>
                    <li class="actor-tag"><?php echo $subtitle_languages['name']; ?></li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </td>
              <td><?php echo date('d/m/Y H:i:s', strtotime($serie['created_at'])); ?></td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-primary editButton" data-id="<?php echo $serie['id']; ?>" data-title="<?php echo $serie['title']; ?>" data-description="<?php echo $serie['description']; ?>"
                    data-platforms="<?php if (isset($serie['series_platforms']) && is_array($serie['series_platforms'])): ?><?php $platformTags = array_map(function ($platform) {
                      return '<li class="list-group-item">' . $platform['id'] . ' ' . $platform['name'] . '</li>';
                    }, $serie['series_platforms']);
                    echo htmlspecialchars(implode('', $platformTags));
                    ?><?php endif; ?>"
                    data-actors="<?php if (isset($serie['series_actors']) && is_array($serie['series_actors'])): ?><?php $actorTags = array_map(function ($actor) {
                      return '<li class="list-group-item">' . $actor['id'] . ' ' . $actor['name'] . '</li>';
                    }, $serie['series_actors']);
                    echo htmlspecialchars(implode('', $actorTags));
                    ?><?php endif; ?>"
                    data-directors="<?php if (isset($serie['series_directors']) && is_array($serie['series_directors'])): ?><?php $directorTags = array_map(function ($director) {
                      return '<li class="list-group-item">' . $director['id'] . ' ' . $director['name'] . '</li>';
                    }, $serie['series_directors']);
                    echo htmlspecialchars(implode('', $directorTags));
                    ?><?php endif; ?>"
                    data-audio="<?php if (isset($serie['series_audio_languages']) && is_array($serie['series_audio_languages'])): ?><?php $audioTags = array_map(function ($audio) {
                      return '<li class="list-group-item">' . $audio['id'] . ' ' . $audio['name'] . '</li>';
                    }, $serie['series_audio_languages']);
                    echo htmlspecialchars(implode('', $audioTags));
                    ?><?php endif; ?>"
                    data-subtitle="<?php if (isset($serie['series_subtitle_languages']) && is_array($serie['series_subtitle_languages'])): ?><?php $subtitleTags = array_map(function ($subtitle) {
                      return '<li class="list-group-item">' . $subtitle['id'] . ' ' . $subtitle['name'] . '</li>';
                    }, $serie['series_subtitle_languages']);
                    echo htmlspecialchars(implode('', $subtitleTags));
                    ?><?php endif; ?>"
                  >Edit</button>
                  <button class="btn btn-danger deleteButton" data-id="<?php echo $serie['id']; ?>" data-title="<?php echo $serie['title']; ?>">Delete</button>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
        <?php endif; ?>
  </div>
<!-- Create -->
<div id="createSerieForm" data-action="read" style="display: none;">
  <h2>Create New Serie</h2>
  <form id="createSerieFormSubmit" method="POST">
  <input type="hidden" name="action" value="create">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" name="title" pattern="[A-Za-z0-9\s]{2,49}" maxlength="50" id="name" class="form-control" required>
      <label for="description">Description:</label>
      <input type="text" name="description" pattern="[A-Za-z0-9\s]{2,199}" maxlength="200" id="description" class="updateDescription form-control" required>
    </div>
    <input type="hidden" name="workingValues" id="workingValues" value="">
    <button type="submit" class="btn btn-primary">Create Serie</button>
    <button type="button" id="cancelCreateSerieBtn" class="btn btn-danger">Cancel</button>
  </form>
  <div class="alert alert-info" role="alert" style="margin-top: 10px;">
    <div class="alert-item">
      <i class="fas fa-info-circle alert-icon"></i>
      <div class="alert-message">
        <strong>Please make sure to:</strong>
        <ul>
          <li>Fill in all the required fields before submitting the form.</li>
          <li>Ensure that the entered title is alphanumeric and has a length between 2 and 200 characters.</li>
          <li>Provide a valid description, alphanumeric and with a length between 2 and 200 characters.</li>
          <li>Please ensure the uniqueness of the serie's identification before creating a new entry. Avoid creating an serie with a duplicate identification in the database.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container" id="drag_drop" style="display: none;">
<div id="accordionCreate">
  <?php foreach (array_slice($generalData, 0, 5) as $tableName => $tableData): ?>
    <h1><?php echo $tableName; ?></h1>
      <div class="drag-drop-container">
          <div class="row">
              <div class="col">
                  <h3>Available</h3>
                  <ul id="todo-list-<?php echo $tableName; ?>" class="list-group bg-gray">
                      <?php foreach ($tableData as $item): ?>
                          <li class="list-group-item"><?php echo $item['id'] . ' ' . $item['name']; ?></li>
                      <?php endforeach; ?>
                  </ul>
              </div>
              <div class="col">
                  <h3>Working</h3>
                  <ul id="done-list-<?php echo $tableName; ?>" class="list-group bg-gray">
                  </ul>
              </div>
          </div>
      </div>
  <?php endforeach; ?>
</div>
</div>
<!-- Update -->
<div id="updateSerieForm" style="display: none;">
  <h2>Update Serie</h2>
  <form id="updateSerieFormSubmit" method="POST">
    <input type="hidden" name="action" value="update">
    <div class="form-group">
      <label for="updateTitle">Title:</label>
      <input type="text" name="title" pattern="[A-Za-z0-9\s]{2,49}" maxlength="50" id="title" class="updateTitle form-control" required>
      <label for="updateDescription">Description:</label>
      <input type="text" name="description" pattern="[A-Za-z0-9\s]{2,199}" maxlength="200" id="description" class="updateDescription form-control" required>
      <input type="hidden" id="id" name="id" value="">
    </div>
    <button class="btn btn-primary updateSerieBtn" data-id="<?php echo $serie['id']; ?>" data-title="<?php echo $serie['title']; ?>" data-description="<?php echo $serie['description']; ?>">Update Serie</button>
    <button id="cancelUpdateSerieBtn" class="btn btn-danger">Cancel</button>
  </form>
  <div class="alert alert-info" role="alert" style="margin-top: 10px;">
    <div class="alert-item">
      <i class="fas fa-info-circle alert-icon"></i>
      <div class="alert-message">
        <strong>Please make sure to:</strong>
        <ul>
          <li>Fill in all the required fields before submitting the form.</li>
          <li>Ensure that the entered title is alphanumeric and has a length between 2 and 50 characters.</li>
          <li>Provide a valid description, alphanumeric and with a length between 2 and 200 characters.</li>
          <li>Please ensure the uniqueness of the serie's identification before creating a new entry. Avoid creating an serie with a duplicate identification in the database.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container" id="drag_drop_update" style="display: none;">
  <div id="accordionUpdate">
    <?php foreach (array_slice($generalData, 0, 5) as $tableName => $tableData): ?>
    <h3><?php echo $tableName; ?></h3>
      <div class="drag-drop-container">
          <div class="row">
              <div class="col">
                  <h3>Available</h3>
                  <ul id="todo-list-first-<?php echo $tableName; ?>" class="list-group bg-gray">
                      <?php foreach ($tableData as $item): ?>
                          <li class="list-group-item"><?php echo $item['id'] . ' ' . $item['name']; ?></li>
                      <?php endforeach; ?>
                  </ul>
              </div>
              <div class="col">
                  <h3>Working</h3>
                  <ul id="done-list-first-<?php echo $tableName; ?>" class="list-group bg-gray">
                  </ul>
              </div>
          </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- Delete -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="serieNameConfirmation"></p>
      </div>
      <form id="deleteSerieFormSubmit" method="POST">
        <input type="hidden" id="id" name="id" value="">
        <input type="hidden" name="action" value="delete">
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary cancelDeleteSerieBtn" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger deleteSerieBtn" id="confirmDeleteButton" data-id="<?php echo $serie['id']; ?>">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#accordionCreate" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content"
    });
    $( "#accordionUpdate" ).accordion({
      collapsible: true,
      active: false,
      heightStyle: "content"
    });
  } );
  </script>
<script>
// Create
$(document).ready(function() {
  $("#createSerieBtn").click(function() {
    $("#serieList").hide();
    $("#createSerieBtn").hide();
    $("#goToHome").hide();
    $("#createSerieForm").show();
    $("#drag_drop").show();
  });
});
$(function() {
const pendingContainers = document.querySelectorAll('[id^="todo-list-"]');
const completedContainers = document.querySelectorAll('[id^="done-list-"]');
const pendingContainersUpdate = document.querySelectorAll('[id^="todo-list-first"]');
const completedContainersUpdate = document.querySelectorAll('[id^="done-list-first"]');
function getContainerValues(container) {
  const items = container.querySelectorAll('li');
  const values = Array.from(items).map(item => item.textContent);
  return {
    containerId: container.id,
    values: values
  };
}
const createSerieForm = $("#createSerieFormSubmit");
const availableValuesInput = $("<input>").attr({
  type: "hidden",
  name: "availableValues"
});
const workingValuesInput = $("<input>").attr({
  type: "hidden",
  name: "workingValues"
});
const updateSerieForm = $("#updateSerieFormSubmit");
const availableValuesInputUpdate = $("<input>").attr({
  type: "hidden",
  name: "availableValuesUpdate"
});
const workingValuesInputUpdate = $("<input>").attr({
  type: "hidden",
  name: "workingValuesUpdate"
});
createSerieForm.append(availableValuesInput);
createSerieForm.append(workingValuesInput);
updateSerieForm.append(availableValuesInputUpdate);
updateSerieForm.append(workingValuesInputUpdate);
pendingContainers.forEach(container => {
  Sortable.create(container, {
    animation: 150,
    direction: 'horizontal',
    swapThreshold: 3,
    group: 'taskList',
    removeOnSpill: false,
    emptyInsertThreshold: 5,
    onEnd: function(evt) {
      const fromContainerId = evt.from.id;
      const toContainerId = evt.to.id;
      if (fromContainerId !== toContainerId) {
        availableValuesInput.val(JSON.stringify(getContainerValues(evt.from)));
        workingValuesInput.val(JSON.stringify(getContainerValues(evt.to)));
      }
    }
  });
});
pendingContainersUpdate.forEach(container => {
  Sortable.create(container, {
    animation: 150,
    direction: 'horizontal',
    swapThreshold: 3,
    group: 'taskList',
    removeOnSpill: false,
    emptyInsertThreshold: 5,
    onEnd: function(evt) {
      const fromContainerId = evt.from.id;
      const toContainerId = evt.to.id;
      if (fromContainerId !== toContainerId) {
        availableValuesInputUpdate.val(JSON.stringify(getContainerValues(evt.from)));
        workingValuesInputUpdate.val(JSON.stringify(getContainerValues(evt.to)));
      }
    }
  });
});
completedContainers.forEach(container => {
  Sortable.create(container, {
    animation: 150,
    direction: 'horizontal',
    swapThreshold: 3,
    group: 'taskList',
    removeOnSpill: false,
    emptyInsertThreshold: 5,
    onEnd: function(evt) {
      const fromContainerId = evt.from.id;
      const toContainerId = evt.to.id;
      if (fromContainerId !== toContainerId) {
        availableValuesInput.val(JSON.stringify(getContainerValues(evt.from)));
        workingValuesInput.val(JSON.stringify(getContainerValues(evt.to)));
      }
    }
  });
});
completedContainersUpdate.forEach(container => {
  Sortable.create(container, {
    animation: 150,
    direction: 'horizontal',
    swapThreshold: 3,
    group: 'taskList',
    removeOnSpill: false,
    emptyInsertThreshold: 5,
    onEnd: function(evt) {
      const fromContainerId = evt.from.id;
      const toContainerId = evt.to.id;
      if (fromContainerId !== toContainerId) {
        availableValuesInputUpdate.val(JSON.stringify(getContainerValues(evt.from)));
        workingValuesInputUpdate.val(JSON.stringify(getContainerValues(evt.to)));
      }
    }
  });
});
createSerieForm.submit(function(event) {
  event.preventDefault();
  let updatedTitle = $("#createSerieForm input[name='title']").val();
  let updatedDescription = $("#createSerieForm input[name='description']").val();
  const availableValues = Array.from(pendingContainers).map(container => getContainerValues(container));
  const workingValues = Array.from(completedContainers).map(container => getContainerValues(container));
  availableValuesInput.val(JSON.stringify(availableValues));
  workingValuesInput.val(JSON.stringify(workingValues));
  this.submit();
});

updateSerieForm.submit(function(event) {
  event.preventDefault();
  let updatedTitle = $("#updateSerieForm input[name='title']").val();
  let updatedDescription = $("#updateSerieForm input[name='description']").val();
  const availableValues = Array.from(pendingContainers).map(container => getContainerValues(container));
  const workingValues = Array.from(completedContainers).map(container => getContainerValues(container));
  availableValuesInputUpdate.val(JSON.stringify(availableValues));
  workingValuesInputUpdate.val(JSON.stringify(workingValues));
  this.submit();
});
});

$(document).ready(function() {
  $("#cancelCreateSerieBtn").click(function() {
    event.preventDefault();
    $("#createSerieForm").hide();
    $("#drag_drop").hide();
    $("#serieList").show();
    $("#createSerieBtn").show();
    $("#goToHome").show();
  });
});
  // Update
  $(document).ready(function() {
  $(".editButton").click(function() {
    $("#createSerieBtn").hide();
    $("#goToHome").hide();
  });
});
  $(document).ready(function() {
    $("#cancelUpdateSerieBtn").click(function(event) {
      event.preventDefault();
      $("#updateSerieForm").hide();
      $("#drag_drop_update").hide();
      $("#serieList").show();
      $("#createSerieBtn").show();
      $("#goToHome").show();
    });
  });
  // Delete
  $(document).ready(function() {
    $("#deleteSerieFormSubmit").submit(function(event) {
      event.preventDefault();
      $('#confirmDeleteModal').modal('hide');
      let serieId = $("#deleteId input[name='id']").val();
      $(this).attr('action', '/Series');
      this.submit();
    });
  });
  $(document).ready(function() {
    $("#cancelDeleteSerieBtn").click(function(event) {
      event.preventDefault();
    });
  });
  document.addEventListener('DOMContentLoaded', function() {
let serieTable = document.getElementById('serieTable');
if (serieTable && serieTable.children.length > 0) {
  serieTable.addEventListener('click', function(event) {
    if (event.target.classList.contains('editButton')) {
      let serieId = event.target.dataset.id;
      let serieTitle = event.target.dataset.title;
      let serieDescription = event.target.dataset.description;
      var working_platforms = event.target.dataset.platforms;
      var working_actors = event.target.dataset.actors;
      var working_directors = event.target.dataset.directors;
      var working_audio = event.target.dataset.audio;
      var working_subtitle = event.target.dataset.subtitle;
      let ulElement = document.getElementById('done-list-first-<?php echo $tableName; ?>');
      let spanElements = ulElement.getElementsByTagName('span');
      for (let i = 0; i < spanElements.length; i++) {
        let spanText = spanElements[i].textContent;
        let liElement = document.createElement('li');
        liElement.textContent = spanText;
        ulElement.appendChild(liElement);
      }
      document.getElementById('updateSerieForm').style.display = 'block';
      document.getElementById('drag_drop_update').style.display = 'block';
      let platformElement = document.getElementById('done-list-first-Platforms');
      let actorElement = document.getElementById('done-list-first-Actors');
      let directorElement = document.getElementById('done-list-first-Directors');
      let audioElement = document.getElementById('done-list-first-Audio');
      let subtitleElement = document.getElementById('done-list-first-Subtitle');
      platformElement.innerHTML  = working_platforms;
      actorElement.innerHTML  = working_actors;
      directorElement.innerHTML  = working_directors;
      audioElement.innerHTML  = working_audio;
      subtitleElement.innerHTML  = working_subtitle;
      document.querySelector('#updateSerieForm input[name="id"]').value = serieId;
      document.querySelector('#updateSerieForm input.updateTitle').value = serieTitle;
      document.querySelector('#updateSerieForm input.updateDescription').value = serieDescription;
      document.getElementById('serieList').style.display = 'none';
      function removeElements(sourceElement, targetElementId) {
        var sourceItems = sourceElement.getElementsByTagName('li');
        var targetContainer = document.getElementById(targetElementId);
        for (var i = 0; i < sourceItems.length; i++) {
          var value = sourceItems[i].textContent;
          var matchingElements = targetContainer.querySelectorAll('li.list-group-item');
          for (var j = 0; j < matchingElements.length; j++) {
            var element = matchingElements[j];  
            if (value === element.textContent) {
              element.remove();
            }
          }
        }
      }
      removeElements(platformElement, 'todo-list-first-Platforms');
      removeElements(actorElement, 'todo-list-first-Actors');
      removeElements(directorElement, 'todo-list-first-Directors');
      removeElements(audioElement, 'todo-list-first-Audio');
      removeElements(subtitleElement, 'todo-list-first-Subtitle');
    }
    if (event.target.classList.contains('deleteButton')) {
      let serieId = event.target.dataset.id;
      let serieTitle = event.target.dataset.title;
      let serieNameConfirmation = document.getElementById('serieNameConfirmation');
      document.querySelector('#confirmDeleteModal input[name="id"]').value = serieId;
      serieNameConfirmation.textContent = 'Are you sure you want to delete the series "' + serieTitle + '"?';
      $('#confirmDeleteModal').modal('show');
    }
  });
}
});
</script>
<script>
function showMessage(messageType, errorType) {
  let messageText = '';
  switch (messageType) {
    case 'success':
      messageText = 'Serie created successfully!';
      break;
    case 'error':
      messageText = 'Error creating serie. Please try again.';
      break;
    case 'error_duplicate':
      messageText = 'The serie name already exists. Create failed.';
      break;
    case 'success_update':
      messageText = 'Serie updated successfully!';
      break;
    case 'error_update':
      messageText = 'Error updating serie. Please try again.';
      break;
    case 'error_update_duplicate':
      messageText = 'The serie title already exists. Update failed.';
      break;
    case 'success_delete':
      messageText = 'Serie deleted successfully!';
      break;
    case 'error_delete':
      messageText = 'Error deleting serie. Please try again.';
      break;
    default:
      break;
  }
  let messageElement = document.createElement('div');
  messageElement.className = 'alert alert-dismissible fade show ' + (messageType.includes('success') ? 'alert-success' : 'alert-danger');
  messageElement.innerHTML = messageText;
  messageElement.style.position = 'fixed';
  messageElement.style.top = '10px';
  messageElement.style.right = '10px';
  messageElement.style.zIndex = '9999';
  document.body.appendChild(messageElement);
  setTimeout(function() {
    messageElement.style.display = 'none';
  }, 3000);
}
let messageType = '<?php echo isset($_SESSION["message"]) ? $_SESSION["message"] : ""; ?>';
if (messageType !== '') {
  showMessage(messageType);
  <?php unset($_SESSION["message"]); ?>
  <?php unset($_SESSION["errors"]); ?>
}
</script>
</body>
</html>
