pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        
        stage('Add Files') {
            steps {
                script {
                    file('index.php').copyTo("${env.WORKSPACE}/index.php")
                    
                    echo "Added index.php to workspace"
                }
            }
        }
        
    }
    
}
