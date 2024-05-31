<?php include('header.php') ?>
<style>
  body{ background: linear-gradient(98deg, rgba(129, 235, 249, 1) 0%, rgba(194, 227, 184, 1) 35%, rgba(237, 222, 142, 1) 100%);
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #25211dfc;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

.form-group button {
    padding: 10px 15px;
    background-color: #28a745;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.form-group button:hover {
    background-color: #218838;
}

.form-group .checkbox-group {
    display: flex;
    flex-wrap: wrap;
}

.form-group .checkbox-group label {
    margin-right: 10px;
    display: flex;
    align-items: center;
    white-space: nowrap;
}

.form-group .checkbox-group input[type="checkbox"] {
    margin-right: 5px;
}
</style>

<div class="container">
    <div class="col-md-12 form-container">
        <h2>Career Application Form</h2>
        <form id="careerForm" action="<?php echo base_url('career'); ?>" method="post" enctype="multipart/form-data">
            <div class="row mt-2">
                <div class="col-md-4 form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="skills">Skills</label>
                    <div class="checkbox-group">
                        <?php if (!empty($facultyskill)): ?>
                        <?php foreach ($facultyskill as $skill): ?>
                        <label>
                            <input type="checkbox" name="skills[]"
                                value="<?php echo htmlspecialchars($skill['id']); ?>">
                            <?php echo htmlspecialchars($skill['facultyskill']); ?>
                        </label>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <p>No skills available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="certificates">Upload Certificates</label>
                    <input type="file" id="certificates" name="certificates[]" multiple required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="courseCertificates">Upload Your Course Related Certificates</label>
                    <input type="file" id="courseCertificates" name="courseCertificates[]" multiple required>
                </div>
                <div class="col-md-4 form-group">
                    <label for="resume">Upload Resume</label>
                    <input type="file" id="resume" name="resume" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit">Submit Application</button>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php') ?>