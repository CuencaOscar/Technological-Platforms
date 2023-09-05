<?php
$currentYear = date('Y');
$minYear = $currentYear - 70;
$minAgeYear = $currentYear - 18;
$minDate = $minYear . '-01-01';
$maxDate = $minAgeYear . '-'.date('m-d');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Directors</title>
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
            <h1>Directors</h1>
            <a href="/" id="goToHome" class="btn btn-primary">Go to Home</a>
            <button id="createDirectorBtn" class="btn btn-primary">
                Create New Director
            </button>
        </header>
        <div class="container">
            <br /><br />
            <div id="directorList">
                <?php if (empty($directors)): ?>
                <div class="center">
                    <img
                        src="../../image/no_data-image.jpg"
                        alt="No information available"
                        class="no-info-img"
                    />
                    <p class="alert alert-info">No information available.</p>
                </div>
                <?php else: ?>
                <table id="directorTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Date Of Birth</th>
                            <th>Nationality</th>
                            <th>DNI</th>
                            <th>Created</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($directors as $director): ?>
                        <tr>
                            <td><?php echo $director['id']; ?></td>
                            <td><?php echo $director['name']; ?></td>
                            <td><?php echo $director['last_name']; ?></td>
                            <td>
                                <?php echo !empty($director['date_of_birth']) ? date('d/m/Y', strtotime($director['date_of_birth'])) : ''; ?>
                            </td>
                            <td><?php echo $director['nationality']; ?></td>
                            <td><?php echo $director['DNI']; ?></td>
                            <td>
                                <?php echo date('d/m/Y H:i:s', strtotime($director['created_at'])); ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button
                                        class="btn btn-primary editButton"
                                        data-id="<?php echo $director['id']; ?>"
                                        data-name="<?php echo $director['name']; ?>"
                                        data-last_name="<?php echo $director['last_name']; ?>"
                                        data-date_of_birth="<?php echo $director['date_of_birth']; ?>"
                                        data-nationality="<?php echo $director['nationality']; ?>"
                                        data-dni="<?php echo $director['DNI']; ?>"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        class="btn btn-danger deleteButton"
                                        data-id="<?php echo $director['id']; ?>"
                                        data-name="<?php echo $director['name']; ?>"
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
                id="createDirectorForm"
                data-action="read"
                style="display: none;"
            >
                <h2>Create New Director</h2>
                <form id="createDirectorFormSubmit" method="POST">
                    <input type="hidden" name="action" value="create" />
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input
                            type="text"
                            name="name"
                            pattern="[A-Za-z0-9]{2,19}"
                            maxlength="20"
                            id="name"
                            class="form-control"
                            required
                        />
                        <label for="last_name">Last Name:</label>
                        <input
                            type="text"
                            name="last_name"
                            pattern="[A-Za-z0-9]{2,19}"
                            maxlength="20"
                            id="last_name"
                            class="form-control"
                            required
                        />
                        <label for="date_of_birth"
                            >Date of Birth (mm/dd/yyyy):</label
                        >
                        <input
                            type="date"
                            name="date_of_birth"
                            id="date_of_birth"
                            class="form-control"
                            min="<?php echo $minDate; ?>"
                            max="<?php echo $maxDate; ?>"
                            required
                            onkeydown="return false;"
                        />
                        <label for="nationality">Nationality:</label>
                        <input
                            type="text"
                            name="nationality"
                            pattern="[A-Za-z0-9]{4,19}"
                            maxlength="20"
                            id="nationality"
                            class="form-control"
                            required
                        />
                        <label for="dni">DNI:</label>
                        <input
                            type="text"
                            name="dni"
                            pattern="[A-Za-z0-9]{8,11}"
                            maxlength="12"
                            id="dni"
                            class="updateDNI form-control"
                            required
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Create Director
                    </button>
                    <button
                        type="button"
                        id="cancelCreateDirectorBtn"
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
                            <strong>Please make sure to:</strong>
                            <ul>
                                <li>
                                    Fill in all the required fields before
                                    submitting the form.
                                </li>
                                <li>
                                    Ensure that the entered name is alphanumeric
                                    and has a length between 2 and 20
                                    characters.
                                </li>
                                <li>
                                    Verify that the entered last name is
                                    alphanumeric and has a length between 2 and
                                    20 characters.
                                </li>
                                <li>
                                    Enter the date of birth in the format
                                    MM/DD/YYYY and ensure it falls within the 18
                                    and 70 years.
                                </li>
                                <li>
                                    Provide a valid nationality, alphanumeric
                                    and with a length between 4 and 20
                                    characters.
                                </li>
                                <li>
                                    Please ensure the uniqueness of the
                                    director's identification before creating a
                                    new entry. Avoid creating an director with a
                                    duplicate identification in the database.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Update -->
            <div id="updateDirectorForm" style="display: none;">
                <h2>Update Director</h2>
                <form id="updateDirectorFormSubmit" method="POST">
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
                        <label for="updateLastName">Last Name:</label>
                        <input
                            type="text"
                            name="last_name"
                            pattern="[A-Za-z0-9\s.]{2,19}"
                            maxlength="20"
                            id="last_name"
                            class="updateLastName form-control"
                            required
                        />
                        <label for="updateDateOfBirth">Date of Birth:</label>
                        <input
                            type="date"
                            name="date_of_birth"
                            id="date_of_birth"
                            class="updateDateOfBirth form-control"
                            required
                        />
                        <label for="updateNationality">Nationality:</label>
                        <input
                            type="text"
                            name="nationality"
                            pattern="[A-Za-z0-9\s.]{4,19}"
                            maxlength="20"
                            id="nationality"
                            class="updateNationality form-control"
                            required
                        />
                        <label for="updateDNI">DNI:</label>
                        <input
                            type="text"
                            name="dni"
                            pattern="[A-Za-z0-9]{8,11}"
                            maxlength="12"
                            id="dni"
                            class="updateDNI form-control"
                            required
                        />
                        <input type="hidden" id="id" name="id" value="" />
                    </div>
                    <button
                        class="btn btn-primary updateDirectorBtn"
                        data-id="<?php echo $director['id']; ?>"
                        data-name="<?php echo $director['name']; ?>"
                        data-last_name="<?php echo $director['last_name']; ?>"
                        data-date_of_birth="<?php echo $director['date_of_birth']; ?>"
                        data-nationality="<?php echo $director['nationality']; ?>"
                        data-dni="<?php echo $director['DNI']; ?>"
                    >
                        Update Director
                    </button>
                    <button id="cancelUpdateDirectorBtn" class="btn btn-danger">
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
                            <strong>Please make sure to:</strong>
                            <ul>
                                <li>
                                    Fill in all the required fields before
                                    submitting the form.
                                </li>
                                <li>
                                    Ensure that the entered name is alphanumeric
                                    and has a length between 2 and 20
                                    characters.
                                </li>
                                <li>
                                    Verify that the entered last name is
                                    alphanumeric and has a length between 2 and
                                    20 characters.
                                </li>
                                <li>
                                    Enter the date of birth in the format
                                    YYYY-MM-DD and ensure it falls within the 18
                                    and 70 years.
                                </li>
                                <li>
                                    Provide a valid nationality, alphanumeric
                                    and with a length between 4 and 20
                                    characters.
                                </li>
                                <li>
                                    Please ensure the uniqueness of the
                                    director's identification before creating a
                                    new entry. Avoid creating an director with a
                                    duplicate identification in the database.
                                </li>
                            </ul>
                        </div>
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
                        <h5 class="modal-title" id="confirmDeleteModalLabel">
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
                        <p id="directorNameConfirmation"></p>
                    </div>
                    <form id="deleteDirectorFormSubmit" method="POST">
                        <input type="hidden" id="id" name="id" value="" />
                        <input type="hidden" name="action" value="delete" />
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary cancelDeleteDirectorBtn"
                                data-dismiss="modal"
                            >
                                Cancel
                            </button>
                            <button
                                type="submit"
                                class="btn btn-danger deleteDirectorBtn"
                                id="confirmDeleteButton"
                                data-id="<?php echo $director['id']; ?>"
                            >
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
              // Create
              $(document).ready(function() {
                $("#createDirectorBtn").click(function() {
                  $("#directorList").hide();
                  $("#createDirectorBtn").hide();
                  $("#goToHome").hide();
                  $("#createDirectorForm").show();
                });
              });
              $(document).ready(function() {
                  $("#createDirectorFormSubmit").submit(function(event) {
                    event.preventDefault();
                    let updatedName = $("#updateDirectorForm input[name='name']").val();
                    let updatedLastName = $("#updateDirectorForm input[name='last_name']").val();
                    let updatedDateOfBirth = $("#updateDirectorForm input[name='date_of_birth']").val();
                    let updatedNationality = $("#updateDirectorForm input[name='nationality']").val();
                    let updatedDNI = $("#updateDirectorForm input[name='dni']").val();
                    this.submit();
                  });
                });
              $(document).ready(function() {
                $("#cancelCreateDirectorBtn").click(function() {
                  event.preventDefault();
                  $("#createDirectorForm").hide();
                  $("#directorList").show();
                  $("#createDirectorBtn").show();
                  $("#goToHome").show();
                });
              });
                // Update
                $(document).ready(function() {
                $(".editButton").click(function() {
                  $("#createDirectorBtn").hide();
                  $("#goToHome").hide();
                });
              });
                $(document).ready(function() {
                  $("#cancelUpdateDirectorBtn").click(function(event) {
                    event.preventDefault();
                    $("#updateDirectorForm").hide();
                    $("#directorList").show();
                    $("#createDirectorBtn").show();
                    $("#goToHome").show();
                  });
                });
                // Delete
                $(document).ready(function() {
                  $("#deleteDirectorFormSubmit").submit(function(event) {
                    event.preventDefault();
                    $('#confirmDeleteModal').modal('hide');
                    let directorId = $("#deleteId input[name='id']").val();
                    $(this).attr('action', '/Directors');
                    this.submit();
                  });
                });
                $(document).ready(function() {
                  $("#cancelDeleteDirectorBtn").click(function(event) {
                    event.preventDefault();
                  });
                });
                document.addEventListener('DOMContentLoaded', function() {
              let directorTable = document.getElementById('directorTable');
              if (directorTable && directorTable.children.length > 0) {
                directorTable.addEventListener('click', function(event) {
                  if (event.target.classList.contains('editButton')) {
                    let directorId = event.target.dataset.id;
                    let directorName = event.target.dataset.name;
                    let directorLastName = event.target.dataset.last_name;
                    let directorDayOfBirth = event.target.dataset.date_of_birth;
                    let directorNationality = event.target.dataset.nationality;
                    let directorDNI = event.target.dataset.dni;
                    document.getElementById('updateDirectorForm').style.display = 'block';
                    document.querySelector('#updateDirectorForm input[name="id"]').value = directorId;
                    document.querySelector('#updateDirectorForm input.updateName').value = directorName;
                    document.querySelector('#updateDirectorForm input.updateLastName').value = directorLastName;
                    document.querySelector('#updateDirectorForm input.updateDateOfBirth').value = directorDayOfBirth;
                    document.querySelector('#updateDirectorForm input.updateNationality').value = directorNationality;
                    document.querySelector('#updateDirectorForm input.updateDNI').value = directorDNI;
                    document.getElementById('directorList').style.display = 'none';
                  }
                  if (event.target.classList.contains('deleteButton')) {
                    let directorId = event.target.dataset.id;
                    let directorName = event.target.dataset.name;
                    let directorNameConfirmation = document.getElementById('directorNameConfirmation');
                    document.querySelector('#confirmDeleteModal input[name="id"]').value = directorId;
                    directorNameConfirmation.textContent = 'Are you sure you want to delete the director "' + directorName + '" and all its relationships?';
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
                  messageText = 'Director created successfully!';
                  break;
                case 'error':
                  messageText = 'Error creating director. Please try again.';
                  break;
                case 'error_duplicate':
                  messageText = 'The director name already exists. Create failed.';
                  break;
                case 'success_update':
                  messageText = 'Director updated successfully!';
                  break;
                case 'error_update':
                  messageText = 'Error updating director. Please try again.';
                  break;
                case 'error_update_duplicate':
                  messageText = 'The director name already exists. Update failed.';
                  break;
                case 'success_delete':
                  messageText = 'Director deleted successfully!';
                  break;
                case 'error_delete':
                  messageText = 'Error deleting director. Please try again.';
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
