pipeline {
    agent any
    
    stages {
        stage('Add Files') {
            steps {
                script {
                    // Specify the files to be added
                    def filesToAdd = ['index.php']
                    
                    // Loop through the files and add them to the workspace
                    for (String file : filesToAdd) {
                        if (fileExists(file)) {
                            file(file).copyTo("${env.WORKSPACE}/${file}")
                            echo "Added file: ${file}"
                        } else {
                            error "File not found: ${file}"
                        }
                    }
                }
            }
        }
        
        // Additional stages for your pipeline...
    }
    
    // Post-build actions, notifications, etc.
}
