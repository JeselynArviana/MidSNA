pipeline {
    agent any
    environment {
        PATH = "${PATH}:/usr/local/bin"
    }
    stages {
        stage("Build-database"){
            steps{
                sh '''
                    docker build -t redlock-database-2.0 ./redlock-database-2.0
                '''
            }
        }
        stage("Build-web"){
            steps{
                sh '''
                    docker build -t redlock-website-2.0 ./redlock-website-2.0
                '''
            }
        }
    }
}