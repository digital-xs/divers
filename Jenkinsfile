pipeline {
  agent any
  stages {
    stage('build') {
      agent any
      steps {
        echo 'hello'
        sh 'mvn clean clover:setup test clover:aggregate clover:clover'
      }
    }

  }
}