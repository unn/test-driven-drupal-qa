## About the jobs

### Template-github-to-acquia
This job enables a sync between Github and the Acquia repos.  In the Github workflow, we merge all feature branches into a branch called integration. This job polls the Github repo for changes in github/integration. When a build is kicked off, there is no tangible build step, just an exit so the build will always pass. The github/integration branch is merged into acquia/integration and pushed as a post build action.

### Template-smoke
This job runs the ant target build-smoke. It's composed of basic health checks so that we don't waste time building for obvious failures. These health checks include, lint, and pass the `@smoke` tag to Behat. It can also function as the default build template for any ant target(s) you wish to run, see build.xml for these targets.

### Variables of note
- BehatExtra - used to pass flags and parameters to the behat binary
- RemoteBehatExtra - used to pass flags and parameters to the behat binary when run via ant the remote-behat target
- AcquiaCloud.user - CloudAPI Username, managed securely via the Jenkins credentials and credentials binding plugins, http://wiki.jenkins-ci.org/display/JENKINS/Credentials+Binding+Plugin
- AcquiaCloud.pass - CloudAPI Password

## How to install these files

1. Import the Jenkins template of your choice: `java -jar jenkins-cli.jar -s http://localhost:8080 create-job newmyjob < template.xml`
2. Reload Jenkins' configuration, for instance using the Jenkins CLI: `java -jar jenkins-cli.jar -s http://localhost:8080 reload-configuration`
3. Visit your Jenkins server and configure the newly created job(s).
