pipeline{

	agent any

	environment {
		DOCKERHUB_CREDENTIALS=credentials('dockerhub-cred')
	}

	stages {

		stage('Build') {

			steps {
				sh 'docker build -t s13g3lb4um/intcontinua:latest .'
			}
		}

		stage('Login') {

			steps {
				sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
			}
		}

		stage('Push') {

			steps {
				sh 'docker push s13g3lb4um/intcontinua:latest'
			}
		}
	}

	post {
		always {
			sh 'docker logout'
		}
	}

}