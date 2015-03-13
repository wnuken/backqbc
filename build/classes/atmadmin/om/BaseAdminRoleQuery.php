<?php


/**
 * Base class that represents a query for the 'admin_role' table.
 *
 *
 *
 * @method AdminRoleQuery orderByRoleId($order = Criteria::ASC) Order by the role_id column
 * @method AdminRoleQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method AdminRoleQuery orderByTreeLevel($order = Criteria::ASC) Order by the tree_level column
 * @method AdminRoleQuery orderBySortOrder($order = Criteria::ASC) Order by the sort_order column
 * @method AdminRoleQuery orderByRoleType($order = Criteria::ASC) Order by the role_type column
 * @method AdminRoleQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method AdminRoleQuery orderByRoleName($order = Criteria::ASC) Order by the role_name column
 * @method AdminRoleQuery orderByGwsIsAll($order = Criteria::ASC) Order by the gws_is_all column
 * @method AdminRoleQuery orderByGwsWebsites($order = Criteria::ASC) Order by the gws_websites column
 * @method AdminRoleQuery orderByGwsStoreGroups($order = Criteria::ASC) Order by the gws_store_groups column
 *
 * @method AdminRoleQuery groupByRoleId() Group by the role_id column
 * @method AdminRoleQuery groupByParentId() Group by the parent_id column
 * @method AdminRoleQuery groupByTreeLevel() Group by the tree_level column
 * @method AdminRoleQuery groupBySortOrder() Group by the sort_order column
 * @method AdminRoleQuery groupByRoleType() Group by the role_type column
 * @method AdminRoleQuery groupByUserId() Group by the user_id column
 * @method AdminRoleQuery groupByRoleName() Group by the role_name column
 * @method AdminRoleQuery groupByGwsIsAll() Group by the gws_is_all column
 * @method AdminRoleQuery groupByGwsWebsites() Group by the gws_websites column
 * @method AdminRoleQuery groupByGwsStoreGroups() Group by the gws_store_groups column
 *
 * @method AdminRoleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AdminRoleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AdminRoleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AdminRole findOne(PropelPDO $con = null) Return the first AdminRole matching the query
 * @method AdminRole findOneOrCreate(PropelPDO $con = null) Return the first AdminRole matching the query, or a new AdminRole object populated from the query conditions when no match is found
 *
 * @method AdminRole findOneByParentId(int $parent_id) Return the first AdminRole filtered by the parent_id column
 * @method AdminRole findOneByTreeLevel(int $tree_level) Return the first AdminRole filtered by the tree_level column
 * @method AdminRole findOneBySortOrder(int $sort_order) Return the first AdminRole filtered by the sort_order column
 * @method AdminRole findOneByRoleType(string $role_type) Return the first AdminRole filtered by the role_type column
 * @method AdminRole findOneByUserId(int $user_id) Return the first AdminRole filtered by the user_id column
 * @method AdminRole findOneByRoleName(string $role_name) Return the first AdminRole filtered by the role_name column
 * @method AdminRole findOneByGwsIsAll(int $gws_is_all) Return the first AdminRole filtered by the gws_is_all column
 * @method AdminRole findOneByGwsWebsites(string $gws_websites) Return the first AdminRole filtered by the gws_websites column
 * @method AdminRole findOneByGwsStoreGroups(string $gws_store_groups) Return the first AdminRole filtered by the gws_store_groups column
 *
 * @method array findByRoleId(int $role_id) Return AdminRole objects filtered by the role_id column
 * @method array findByParentId(int $parent_id) Return AdminRole objects filtered by the parent_id column
 * @method array findByTreeLevel(int $tree_level) Return AdminRole objects filtered by the tree_level column
 * @method array findBySortOrder(int $sort_order) Return AdminRole objects filtered by the sort_order column
 * @method array findByRoleType(string $role_type) Return AdminRole objects filtered by the role_type column
 * @method array findByUserId(int $user_id) Return AdminRole objects filtered by the user_id column
 * @method array findByRoleName(string $role_name) Return AdminRole objects filtered by the role_name column
 * @method array findByGwsIsAll(int $gws_is_all) Return AdminRole objects filtered by the gws_is_all column
 * @method array findByGwsWebsites(string $gws_websites) Return AdminRole objects filtered by the gws_websites column
 * @method array findByGwsStoreGroups(string $gws_store_groups) Return AdminRole objects filtered by the gws_store_groups column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseAdminRoleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAdminRoleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'atmadmin';
        }
        if (null === $modelName) {
            $modelName = 'AdminRole';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AdminRoleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AdminRoleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AdminRoleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AdminRoleQuery) {
            return $criteria;
        }
        $query = new AdminRoleQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   AdminRole|AdminRole[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AdminRolePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AdminRolePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 AdminRole A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRoleId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 AdminRole A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT role_id, parent_id, tree_level, sort_order, role_type, user_id, role_name, gws_is_all, gws_websites, gws_store_groups FROM admin_role WHERE role_id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new AdminRole();
            $obj->hydrate($row);
            AdminRolePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return AdminRole|AdminRole[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|AdminRole[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AdminRolePeer::ROLE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AdminRolePeer::ROLE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the role_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleId(1234); // WHERE role_id = 1234
     * $query->filterByRoleId(array(12, 34)); // WHERE role_id IN (12, 34)
     * $query->filterByRoleId(array('min' => 12)); // WHERE role_id >= 12
     * $query->filterByRoleId(array('max' => 12)); // WHERE role_id <= 12
     * </code>
     *
     * @param     mixed $roleId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByRoleId($roleId = null, $comparison = null)
    {
        if (is_array($roleId)) {
            $useMinMax = false;
            if (isset($roleId['min'])) {
                $this->addUsingAlias(AdminRolePeer::ROLE_ID, $roleId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($roleId['max'])) {
                $this->addUsingAlias(AdminRolePeer::ROLE_ID, $roleId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::ROLE_ID, $roleId, $comparison);
    }

    /**
     * Filter the query on the parent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentId(1234); // WHERE parent_id = 1234
     * $query->filterByParentId(array(12, 34)); // WHERE parent_id IN (12, 34)
     * $query->filterByParentId(array('min' => 12)); // WHERE parent_id >= 12
     * $query->filterByParentId(array('max' => 12)); // WHERE parent_id <= 12
     * </code>
     *
     * @param     mixed $parentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByParentId($parentId = null, $comparison = null)
    {
        if (is_array($parentId)) {
            $useMinMax = false;
            if (isset($parentId['min'])) {
                $this->addUsingAlias(AdminRolePeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentId['max'])) {
                $this->addUsingAlias(AdminRolePeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::PARENT_ID, $parentId, $comparison);
    }

    /**
     * Filter the query on the tree_level column
     *
     * Example usage:
     * <code>
     * $query->filterByTreeLevel(1234); // WHERE tree_level = 1234
     * $query->filterByTreeLevel(array(12, 34)); // WHERE tree_level IN (12, 34)
     * $query->filterByTreeLevel(array('min' => 12)); // WHERE tree_level >= 12
     * $query->filterByTreeLevel(array('max' => 12)); // WHERE tree_level <= 12
     * </code>
     *
     * @param     mixed $treeLevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByTreeLevel($treeLevel = null, $comparison = null)
    {
        if (is_array($treeLevel)) {
            $useMinMax = false;
            if (isset($treeLevel['min'])) {
                $this->addUsingAlias(AdminRolePeer::TREE_LEVEL, $treeLevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($treeLevel['max'])) {
                $this->addUsingAlias(AdminRolePeer::TREE_LEVEL, $treeLevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::TREE_LEVEL, $treeLevel, $comparison);
    }

    /**
     * Filter the query on the sort_order column
     *
     * Example usage:
     * <code>
     * $query->filterBySortOrder(1234); // WHERE sort_order = 1234
     * $query->filterBySortOrder(array(12, 34)); // WHERE sort_order IN (12, 34)
     * $query->filterBySortOrder(array('min' => 12)); // WHERE sort_order >= 12
     * $query->filterBySortOrder(array('max' => 12)); // WHERE sort_order <= 12
     * </code>
     *
     * @param     mixed $sortOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterBySortOrder($sortOrder = null, $comparison = null)
    {
        if (is_array($sortOrder)) {
            $useMinMax = false;
            if (isset($sortOrder['min'])) {
                $this->addUsingAlias(AdminRolePeer::SORT_ORDER, $sortOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortOrder['max'])) {
                $this->addUsingAlias(AdminRolePeer::SORT_ORDER, $sortOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::SORT_ORDER, $sortOrder, $comparison);
    }

    /**
     * Filter the query on the role_type column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleType('fooValue');   // WHERE role_type = 'fooValue'
     * $query->filterByRoleType('%fooValue%'); // WHERE role_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roleType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByRoleType($roleType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roleType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $roleType)) {
                $roleType = str_replace('*', '%', $roleType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::ROLE_TYPE, $roleType, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(AdminRolePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(AdminRolePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the role_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRoleName('fooValue');   // WHERE role_name = 'fooValue'
     * $query->filterByRoleName('%fooValue%'); // WHERE role_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roleName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByRoleName($roleName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roleName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $roleName)) {
                $roleName = str_replace('*', '%', $roleName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::ROLE_NAME, $roleName, $comparison);
    }

    /**
     * Filter the query on the gws_is_all column
     *
     * Example usage:
     * <code>
     * $query->filterByGwsIsAll(1234); // WHERE gws_is_all = 1234
     * $query->filterByGwsIsAll(array(12, 34)); // WHERE gws_is_all IN (12, 34)
     * $query->filterByGwsIsAll(array('min' => 12)); // WHERE gws_is_all >= 12
     * $query->filterByGwsIsAll(array('max' => 12)); // WHERE gws_is_all <= 12
     * </code>
     *
     * @param     mixed $gwsIsAll The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByGwsIsAll($gwsIsAll = null, $comparison = null)
    {
        if (is_array($gwsIsAll)) {
            $useMinMax = false;
            if (isset($gwsIsAll['min'])) {
                $this->addUsingAlias(AdminRolePeer::GWS_IS_ALL, $gwsIsAll['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwsIsAll['max'])) {
                $this->addUsingAlias(AdminRolePeer::GWS_IS_ALL, $gwsIsAll['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::GWS_IS_ALL, $gwsIsAll, $comparison);
    }

    /**
     * Filter the query on the gws_websites column
     *
     * Example usage:
     * <code>
     * $query->filterByGwsWebsites('fooValue');   // WHERE gws_websites = 'fooValue'
     * $query->filterByGwsWebsites('%fooValue%'); // WHERE gws_websites LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gwsWebsites The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByGwsWebsites($gwsWebsites = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gwsWebsites)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gwsWebsites)) {
                $gwsWebsites = str_replace('*', '%', $gwsWebsites);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::GWS_WEBSITES, $gwsWebsites, $comparison);
    }

    /**
     * Filter the query on the gws_store_groups column
     *
     * Example usage:
     * <code>
     * $query->filterByGwsStoreGroups('fooValue');   // WHERE gws_store_groups = 'fooValue'
     * $query->filterByGwsStoreGroups('%fooValue%'); // WHERE gws_store_groups LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gwsStoreGroups The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function filterByGwsStoreGroups($gwsStoreGroups = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gwsStoreGroups)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gwsStoreGroups)) {
                $gwsStoreGroups = str_replace('*', '%', $gwsStoreGroups);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdminRolePeer::GWS_STORE_GROUPS, $gwsStoreGroups, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   AdminRole $adminRole Object to remove from the list of results
     *
     * @return AdminRoleQuery The current query, for fluid interface
     */
    public function prune($adminRole = null)
    {
        if ($adminRole) {
            $this->addUsingAlias(AdminRolePeer::ROLE_ID, $adminRole->getRoleId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
