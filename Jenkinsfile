pipeline {
  agent any
  stages {
    stage('build') {
      agent any
      steps {
        echo 'hello'
        sh 'sh "--coverage-html \'reports/coverage\' --coverage-clover \'reports/coverage/coverage.xml\' test/"'
      }
    }

  }
}