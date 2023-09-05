<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Platforms</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        />
        <link
            rel="icon"
            sizes="128x128"
            href="data:image/png;base64,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"
        />
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
        </style>
    </head>
    <body>
        <header>
            <h1>Platforms</h1>
            <a href="/" id="goToHome" class="btn btn-primary">Go to Home</a>
            <button id="createPlatformBtn" class="btn btn-primary">
                Create New Platform
            </button>
        </header>
        <div class="container">
            <br /><br />
            <div id="platformList">
                <?php if (empty($platforms)): ?>
                <div class="center">
                    <img
                        src="../../image/no_data-image.jpg"
                        alt="No information available"
                        class="no-info-img"
                    />
                    <p class="alert alert-info">No information available.</p>
                </div>
                <?php else: ?>
                <table id="platformTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($platforms as $platform): ?>
                        <tr>
                            <td><?php echo $platform['id']; ?></td>
                            <td><?php echo $platform['name']; ?></td>
                            <td>
                                <?php echo date('d/m/Y H:i:s', strtotime($platform['created_at'])); ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button
                                        class="btn btn-primary editButton"
                                        data-id="<?php echo $platform['id']; ?>"
                                        data-name="<?php echo $platform['name']; ?>"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        class="btn btn-danger deleteButton"
                                        data-id="<?php echo $platform['id']; ?>"
                                        data-name="<?php echo $platform['name']; ?>"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
            <!-- Create -->
            <div
                id="createPlatformForm"
                data-action="read"
                style="display: none;"
            >
                <h2>Create New Platform</h2>
                <form id="createPlatformFormSubmit" method="POST">
                    <input type="hidden" name="action" value="create" />
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <div class="input-group">
                            <input
                                type="text"
                                name="name"
                                pattern="[A-Za-z0-9\s.]{2,19}"
                                maxlength="20"
                                id="name"
                                class="form-control"
                                required
                            />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Create Platform
                    </button>
                    <button
                        type="button"
                        id="cancelCreatePlatformBtn"
                        class="btn btn-danger"
                    >
                        Cancel
                    </button>
                </form>
                <div
                    class="alert alert-info"
                    role="alert"
                    style="float: right; margin-top: 10px;"
                >
                    <div class="alert-item">
                        <i class="fas fa-info-circle alert-icon"></i>
                        <div class="alert-message">
                            <strong
                                >Ensure that the entered name is alphanumeric
                                    and has a length between 2 and 20
                                    characters.</strong
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Update -->
            <div id="updatePlatformForm" style="display: none;">
                <h2>Update Platform</h2>
                <form id="updatePlatformFormSubmit" method="POST">
                    <input type="hidden" name="action" value="update" />
                    <div class="form-group">
                        <label for="updateName">Name:</label>
                        <input
                            type="text"
                            name="name"
                            pattern="[A-Za-z0-9\s.]{2,19}"
                            maxlength="20"
                            id="name"
                            class="updateName form-control"
                            required
                        />
                        <input type="hidden" id="id" name="id" value="" />
                    </div>
                    <button
                        class="btn btn-primary updatePlatformBtn"
                        data-id="<?php echo $platform['id']; ?>"
                        data-name="<?php echo $platform['name']; ?>"
                    >
                        Update Platform
                    </button>
                    <button id="cancelUpdatePlatformBtn" class="btn btn-danger">
                        Cancel
                    </button>
                </form>
                <div
                    class="alert alert-info"
                    role="alert"
                    style="float: right; margin-top: 10px;"
                >
                    <div class="alert-item">
                        <i class="fas fa-info-circle alert-icon"></i>
                        <div class="alert-message">
                            <strong
                                >Ensure that the entered name is alphanumeric
                                    and has a length between 2 and 20
                                    characters.</strong
                            >
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete -->
            <div
                class="modal fade"
                id="confirmDeleteModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="confirmDeleteModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5
                                class="modal-title"
                                id="confirmDeleteModalLabel"
                            >
                                Confirm Deletion
                            </h5>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                            >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="platformNameConfirmation"></p>
                        </div>
                        <form id="deletePlatformFormSubmit" method="POST">
                            <input type="hidden" id="id" name="id" value="" />
                            <input type="hidden" name="action" value="delete" />
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Cancel
                                </button>
                                <button
                                    type="submit"
                                    class="btn btn-danger deletePlatformBtn"
                                    id="confirmDeleteButton"
                                    data-id="<?php echo $platform['id']; ?>"
                                >
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
              // Create
              $(document).ready(function() {
                $("#createPlatformBtn").click(function() {
                  $("#platformList").hide();
                  $("#createPlatformBtn").hide();
                  $("#goToHome").hide();
                  $("#createPlatformForm").show();
                });
              });
              $(document).ready(function() {
                  $("#createPlatformFormSubmit").submit(function(event) {
                    event.preventDefault();
                    let updatedName = $("#updatePlatformForm input[name='name']").val();
                    this.submit();
                  });
                });
              $(document).ready(function() {
                $("#cancelCreatePlatformBtn").click(function() {
                  event.preventDefault();
                  $("#createPlatformForm").hide();
                  $("#platformList").show();
                  $("#createPlatformBtn").show();
                  $("#goToHome").show();
                });
              });
                // Update
                $(document).ready(function() {
                  $(".editButton").click(function() {
                    $("#createPlatformBtn").hide();
                    $("#goToHome").hide();
                  });
                });
                $(document).ready(function() {
                  $("#cancelUpdatePlatformBtn").click(function(event) {
                    event.preventDefault();
                    $("#updatePlatformForm").hide();
                    $("#platformList").show();
                    $("#createPlatformBtn").show();
                    $("#goToHome").show();
                  });
                });
                // Delete
                $(document).ready(function() {
                  $("#deletePlatformFormSubmit").submit(function(event) {
                    event.preventDefault();
                    $('#confirmDeleteModal').modal('hide');
                    let platformId = $("#deleteId input[name='id']").val();
                    $(this).attr('action', '/Platforms');
                    this.submit();
                  });
                });
                $(document).ready(function() {
                  $("#cancelDeletePlatformBtn").click(function(event) {
                    event.preventDefault();
                  });
                });
                document.addEventListener('DOMContentLoaded', function() {
              let platformTable = document.getElementById('platformTable');
              if (platformTable && platformTable.children.length > 0) {
                platformTable.addEventListener('click', function(event) {
                  if (event.target.classList.contains('editButton')) {
                    let platformId = event.target.dataset.id;
                    let platformName = event.target.dataset.name;
                    document.getElementById('updatePlatformForm').style.display = 'block';
                    document.querySelector('#updatePlatformForm input[name="id"]').value = platformId;
                    document.querySelector('#updatePlatformForm input.updateName').value = platformName;
                    document.getElementById('platformList').style.display = 'none';
                  }
                  if (event.target.classList.contains('deleteButton')) {
                    let platformId = event.target.dataset.id;
                    let platformName = event.target.dataset.name;
                    let platformNameConfirmation = document.getElementById('platformNameConfirmation');
                    document.querySelector('#confirmDeleteModal input[name="id"]').value = platformId;
                    platformNameConfirmation.textContent = 'Are you sure you want to delete the platform "' + platformName + '" and all its relationships?';
                    $('#confirmDeleteModal').modal('show');
                  }
                });
              }
            });
        </script>
        <script>
            function showMessage(messageType) {
              let messageText = '';
              switch (messageType) {
                case 'success':
                  messageText = 'Platform created successfully!';
                  break;
                case 'error':
                  messageText = 'Error creating platform. Please try again.';
                  break;
                case 'error_duplicate':
                  messageText = 'The platform name already exists. Create failed.';
                  break;
                case 'success_update':
                  messageText = 'Platform updated successfully!';
                  break;
                case 'error_update':
                  messageText = 'Error updating platform. Please try again.';
                  break;
                case 'error_update_duplicate':
                  messageText = 'The platform name already exists. Update failed.';
                  break;
                case 'success_delete':
                  messageText = 'Platform deleted successfully!';
                  break;
                case 'error_delete':
                  messageText = 'Error deleting platform. Please try again.';
                  break;
                default:
                  messageText = 'Invalid fields: Please provide only "name" and "id" fields.';
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
            }
        </script>
    </body>
</html>
