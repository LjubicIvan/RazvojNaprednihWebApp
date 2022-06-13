const { GraphQLObjectType } = require('graphql');

const fieldsUser = require('./user');
const fieldsUsers = require('./users');
const fieldsPosts = require('./posts');
const fieldsDepartaments = require('./departaments');
const fieldsDepartament = require('./departament');
const fieldsProfessors = require('./professors');
const fieldsProfessor = require('./professor');
const fieldsCourses = require('./courses');

const Query = new GraphQLObjectType({
  name: 'Query',
  fields: {
    // Query one user
    user: fieldsUser,
    // Query all users
    users: fieldsUsers,
    // Query all posts
    posts: fieldsPosts,
    //  Query all departaments
    departaments: fieldsDepartaments,
    //  Query all professors
    professors: fieldsProfessors,
    //  Query all courses
    courses: fieldsCourses,
    // Query one professor
    professor: fieldsProfessor,
    //  Query one departament
    departament: fieldsDepartament
  }
});

module.exports = Query;